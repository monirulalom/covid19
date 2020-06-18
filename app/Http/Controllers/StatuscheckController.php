<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatuscheckController extends Controller
{
    //
    function index(){
        return view('statuscheck');
    }

    function show(Request $request){

        $validatedData = $request->validate([
            'email' => 'required|email',
            'key' => 'required|size:6',
        ]);

        $email = $request->email;
        $key = $request->key;

        $application = \App\Application::where('email',$email)->where('key',$key)->first();

        return view('showstatus',compact('application'));

    }
}
