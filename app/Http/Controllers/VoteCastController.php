<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Candidate;
use App\Voter;
use Illuminate\Http\Request;

class VoteCastController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('votingsystem.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('votingsystem.createCastVote');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $symbol = $_POST['symbol'];
        $voterId = $_POST['voterId'];
//        dd($symbol);
//        dd($voterId);

        $candidates = Candidate::all()->where('id',$symbol);
        //dd($candidates);
        $voters = Voter::all()->where('voterId',$voterId);
        dd($voters);

        if(isset($symbol) && isset($voterId)){
            if($voterId == $voters['voterId']){
                
            }
        }
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
