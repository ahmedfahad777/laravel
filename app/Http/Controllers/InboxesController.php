<?php namespace App\Http\Controllers;
use Input;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Inbox;
use Illuminate\Http\Request;

class InboxesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$inboxes = Inbox::all();
        $inboxes = Inbox::all()->where('status','sent');
        return view('inboxes.index', compact('inboxes'));
	}

    public function sent()
    {
        $sents = Inbox::all()->where('status','sent');
        return view('inboxes.sent', compact('sents'));
    }

    public function draft()
    {
        $drafts = Inbox::all()->where('status','draft');
        /*dd($drafts);*/
        return view('inboxes.draft', compact('drafts'));
    }

    public function trash()
    {
        $trashes = Inbox::onlyTrashed()->get();
//        var_dump($data); die();
        //$trashes = Inbox::all()->where('status','trash');
//        $value = NULL;
//        $trashes = Inbox::all()->orWhereNotNull('deleted_at');
//        var_dump($trashes); die();
        /*dd($trashes);*/
        return view('inboxes.trash', compact('trashes'));
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('inboxes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    /*protected $rules = ['receiver_email_id' => 'required|email',
                        'subject'           => 'required',
                        'body_description'  => 'required'
                        ];*/

    public function store(Requests\InboxRequest $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        /*$rules = array(
            'receiver_email_id' => 'required|email',
            'subject'           => 'required',
            'body_description'  => 'required'
        );
        $validator = validate::make(Input::all(), $rules);*/
        /*$input = Input::all();
        dd($input);*/
        if(array_key_exists('discard',Input::all())){
            return Redirect::to('inboxes');
        }
        //$this->validate($request, $this->rules);
        //validate($request, $request->rules());
        if(array_key_exists('sent', Input::all()) )
        {
            //$input = array_merge(Input::all(), array('status' => 'sent'));
            $input = array_except(Input::all(), array('sent','to', 'status'));
            $input = array_add($input, 'status', 'sent');
                //$input = Input::all();
            //dd($input);

            Inbox::create($input);
        }
        if(array_key_exists('draft',Input::all())){
            $input = array_except(Input::all(), array('draft','to', 'status'));
            $input = array_add($input, 'status', 'draft');
            Inbox::create($input);
        }

        /*Session::flash('message', 'Message has been sent successfully!');*/
        return Redirect::to('inboxes');

        /*// process the login
        if ($validator->fails()) {
            return Redirect::to('inboxes/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $inbox = new Inbox();
            $inbox->receiver_email_id   = Input::get('receiver_email_id');
            $inbox->subject             = Input::get('subject');
            $inbox->body_description    = Input::get('body_description');
            $inbox->save();

            // redirect
            Session::flash('message', 'Message has been sent successfully!');
            return Redirect::to('inboxes');
        }*/
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show(Inbox $inbox)
    {
        return view('inboxes.show', compact('inbox'));
    }
	/*public function show($value)
	{
        // get the inbox
        $inbox = Inbox::find($value)->get($value);

        // show the view and pass the inbox to it

		//
        return view('inboxes.show',compact('inbox'));
	}*/

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit(Inbox $inbox)
    {
        return view('inboxes.edit', compact('inbox'));
    }
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Inbox $inbox, Requests\InboxRequest $request)
	{
		//$this->validate($request, $this->rules);
        $input=array_except(Input::all(),'_method');
        $inbox->update($input);
        return Redirect::to('inboxes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        //$id = Inbox::find( 1);
        dd($id);
        $id = Inbox::find($id);
        $id ->delete();
            /*$inbox = Inbox::withTrashed()->where('id', 1)->restore();
            var_dump($inbox);*/
       /*     die();*/
//        dd($inbox);
            /*$id = Inbox::find($id);*/
        //$id -> delete();

       // DB::table('inboxes')->whereIn('id',)->delete();
        //Inbox::destroy(Input::all()['cbox']);

        //redirect
        return Redirect::to('inboxes');
	}
}
