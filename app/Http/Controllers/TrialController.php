<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\Volunteer;
class TrialController extends Controller
{
    function showform(){
        return view('trial');
    }

    function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'address' => 'required|min:4',
            'age' => 'required|integer',
            'nid' => 'required'
        ]);

        $volunteer = new Volunteer();

        $volunteer->name = $request->name;
        $volunteer->email = $request->email;
        $volunteer->address = $request->address; 
        $volunteer->age = $request->age;
        $volunteer->nid = $request->nid;

        $volunteer->save();

        return redirect('/trial')->with('status', 'Request Submitted');


    }
    function list(){
        $volunteers = Volunteer::all();
        return view('volunteer',compact('volunteers'));
    }
}
