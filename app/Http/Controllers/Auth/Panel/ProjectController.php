<?php

namespace App\Http\Controllers\Auth\Panel;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('auth.panel.projects.index')->with(['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.panel.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $request->file->getClientOriginalName(),
        ]);

        $request->file->storeAs('projects', $request->file->getClientOriginalName());

        return redirect()->route('projects.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('auth.panel.projects.edit')->with(['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        // If there is a file uploaded
        if ($request->file) {
            // Delete the existing one
            Storage::delete('projects/' . $project->image);

            // Update existing file name to new file name
            $project->image = $request->file->getClientOriginalName();

            // Store the uploaded file into storage
            $request->file->storeAs('projects', $request->file->getClientOriginalName());
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;

        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete('projects/' . $project->image);

        $project->delete();

        return redirect()->route('projects.index');
    }
}
