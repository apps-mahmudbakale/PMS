<?php

namespace App\Http\Controllers;

use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = Project::create(array_merge($request->all(), ['user_id' => auth()->user()->id]));
        return redirect()->route('app.projects.index')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->update(array_merge($request->all(), ['user_id' => auth()->user()->id]));
        return redirect()->route('app.projects.index')->with('success', 'Project Updated');
    }


    public function todo($id){
        return view('projects.todo');
    }




    public function docs($id){
        return view('projects.docs');
    }



    public function schedules($id){
        return view('projects.schedules');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('app.projects.index')->with('success', 'Project Deleted');
    }
}
