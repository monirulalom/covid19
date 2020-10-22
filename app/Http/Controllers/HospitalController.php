<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class HospitalController extends Controller
{
    public function index(){

        $hospitals = Hospital::all();

        return view('hospital',compact('hospitals'));

    }
    public function add(){

        return view('addhospital');
    }
    public function store(Request $request){

        $hospital = new Hospital();

        $hospital->name = $request->name;
        $hospital->email = $request->email;
        $hospital->address = $request->address;

        $hospital->save();

        return redirect('/admin/hospitals');

    }

    public function edit($id){

        $hospital = Hospital::findOrfail($id);


        return view('edithospital',compact('hospital'));

    }
    public function update(Request $request,$id){

        $hospital = Hospital::findOrfail($id);


        $hospital->name = $request->name;
        $hospital->email = $request->email;
        $hospital->address = $request->address;

        $hospital->save();

        return redirect('/admin/hospitals');

    }
    public function delete($id){

        $hospital = Hospital::findOrfail($id);

        $hospital->delete();

        return redirect('/admin/hospitals');

    }

    
}
