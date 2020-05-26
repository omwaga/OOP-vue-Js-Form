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


    //Attribute and class name binding
    public function attribute()
    {
        return view('attribute');
    }

    //components 0
    public function components()
    {
        return view('components');
    }

    //components 1
    public function components1()
    {
        return view('components1');
    }

    //Practical components 
    public function practicalcomponents()
    {
        return view('practicalcomponents');
    }
}
