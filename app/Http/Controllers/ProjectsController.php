<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    //
    public function create()
    {
    	return view('projects.create', [
    	       'projects' => Project::all()
    	   ]);
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

    	Project::forceCreate($attributes);

    	return ['message' => 'Project Created!'];
    }


    //Vue js lists
    public function lists()
    {
        return view('lists');
    }
}
