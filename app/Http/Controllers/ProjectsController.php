<?php

namespace App\Http\Controllers;


use App\Project;


use Illuminate\Http\Request;


class ProjectsController extends Controller
{   
   public function  __construct(){
       $this->middleware('auth');
   }
    public function index(){
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create(){

        return view('projects.create');
    }

    public function store(){
        $attributes = request()->validate([
           'title' => ['required', 'min:3'],
           'description' => ['required', 'min:3'], 
        ]);

        $attributes['owner_id'] = auth()->id();
        Project::create($attributes);

        // Project::create($attributes + ['owner_id' => auth()->id()]);
        
        return redirect('/projects');
    }

    public function show(Project $project){

        // abort_unless(auth()->user()->owns($project), 403);            // ==> method 1
        // abort_if($project->owner_id !== auth()->id(),403);            // ==> method 2
        // if(\Gate::denies('update',$project)){                         // ==> method 3
        //     abort(403);
        // }
        // abort_if(\Gate::denies('update', $project), 403);             // ==> method 4
        // abort_unless(\Gate::allows('update', $project), 403);         // ==> method 5
        // abort_unless(auth()->user()->can('update',$project), 403);    // ==> method 6
        // abort_if(auth()->user()->cannot('update', $project), 403);    // ==> method 7
        // $this->authorize('update', $project);                         // ==> method 8
                                                                         // ==> method 9 --> routes/web.php
                                                                        
        return view('projects.show', compact('project'));

    }

    public function edit(Project $project){
        return view('projects.edit',compact('project'));
    }

    public function update(Project $project){

        $project->update(request(['title','description']));

        return redirect('/projects');
    }

    public function destroy(Project $project){

        $project->delete();

        return redirect('/projects');
    }
}
