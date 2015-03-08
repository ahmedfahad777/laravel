<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Input;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Voter;
use Illuminate\Http\Request;

class VotersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('votingsystem.createVoter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('votingsystem.createVoter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\VoterRequest $voterRequest)
    {
        $input = Input::all();
        //dd($input);
        Voter::create( $input );

        return Redirect::route('voters.index')->with('message','New Voter Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
