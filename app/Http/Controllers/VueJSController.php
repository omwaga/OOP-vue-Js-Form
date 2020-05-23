<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class VueJSController extends Controller
{
    
    public function index()
    {
        return view('vuejs-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comments' => 'required'
        ]);


        return response()->json(['success'=>'Done!']);
    }
}
