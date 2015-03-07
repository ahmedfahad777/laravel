<?php


namespace App\Http\Controllers;

use Input;
use Redirect;

use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class ProjectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }


    public function create()
    {
        return view('projects.create');
    }


    public function show(Project $project)
    {
       dd($project);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
//    public function store()
//   {
//
//      $input = Input::all();
//       Project::create($input);
//
//        return Redirect::route('projects.index')->with('message', 'Project created');
//    }

//    public function update(Project $project)
//    {
//        $input = array_except(Input::all(), '_method');
//        $project->update($input);
//
//        return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
//    }

    public function destroy(Project $project)
    {
        $project->delete();

        return Redirect::route('projects.index')->with('message', 'Project deleted.');
    }



    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request	 * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        Project::create( $input );

        return Redirect::route('projects.index')->with('message', 'Project created');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @param \Illuminate\Http\Request $request	 * @return Response
     */
    public function update(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $project->update($input);

        return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
    }


}
