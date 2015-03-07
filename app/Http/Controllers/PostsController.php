<?php namespace App\Http\Controllers;

use Input;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;

use Carbon\Carbon;
//use Request;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $posts= Posts::latest('published_at')->get();
//        $posts= Posts::all();
        return view ('posts.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostsRequest $request)
    {
       // $this->validate($request, $this->rules);

        $input = Input::all();
        $input['published_at']=Carbon::now();

        Posts::create($input);

        return redirect::to('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Posts $posts)
    {

        return view('posts.show', compact('posts'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Posts $posts)
    {
//        $newtimeline = Newtimeline::find($id)->get($id);
        return view('posts.edit', compact('posts'));
    }



    public function update(Posts $posts,Request $request)
    {
        $input=array_except(Input::all(),'_method');
        $posts->update($input);
        return Redirect::to('posts');
    }



    public function destroy(Posts $posts)
    {
        // delete
//        $posts = Posts::find($id);
        $posts->delete();

        // redirect
//        Session::flash('message', 'Successfully deleted the Post!');
        return Redirect::to('posts');
    }

}
