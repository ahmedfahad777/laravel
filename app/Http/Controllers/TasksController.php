<?php

namespace App\Http\Controllers;


use Input;
use Redirect;
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function index(Project $project)
    {
        return view('tasks.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Project $project
     * @return Response
     */

    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }



    public function show(Project $project, Task $task)
    {
        return view('tasks.show', compact('project', 'task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */
    public function edit(Project $project, Task $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }



//    public function store()
//    {
//        $input = Input::all();
//        Project::create($input);
//
//        return Redirect::route('projects.index')->with('message', 'Project created');
//    }
//
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


    protected $rules = [		'name' => ['required', 'min:3'],		'slug' => ['required'],		'description' => ['required'],	];
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Project $project
     * @param \Illuminate\Http\Request $request	 * @return Response
     */
    public function store(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        $input['project_id'] = $project->id;
        Task::create( $input );

        return Redirect::route('projects.show', $project->slug)->with('Task created.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @param \Illuminate\Http\Request $request	 * @return Response
     */
    public function update(Project $project, Task $task, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $task->update($input);

        return Redirect::route('projects.tasks.show', [$project->slug, $task->slug])->with('message', 'Task updated.');
    }

}
