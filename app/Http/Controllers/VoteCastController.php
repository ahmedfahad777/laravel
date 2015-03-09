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
        $candidates = Candidate::all();
        return view('votingsystem.index', compact('candidates'));
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
        $voterId = $_POST['voterId'];
        $symbol = $_POST['symbol'];

        /*var_dump($symbol);
        var_dump($voterId);
        die();*/
//        dd($symbol);
//        dd($voterId);

        $candidates = Candidate::all()->where('id',$symbol);
        //dd($candidates->find('cast'));
        //dd(substr_count($candidates,'cast'));

        //dd(array_key_exists('cast',$candidates));

        $voters = Voter::all()->where('voterId',$voterId);
        dd($voters->count());
        var_dump($voterId);
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
