<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TestRequestController extends Controller
{
    //

    public function index()
    {
        // $divisions = DB::table('divisions')->pluck("name","id");
        $divisions = \App\Division::pluck("name","id");
        return view('test',compact('divisions'));
    }
    public function getDistricts($id) 
    {        
       // $districts = DB::table("districts")->where("division_id",$id)->pluck("name","id");
       $districts = \App\District::where("division_id",$id)->pluck("name","id");
        return json_encode($districts);

    }

    public function getUpazillas($id) 
    {        
       // $districts = DB::table("districts")->where("district_id",$id)->pluck("name","id");
       $upazillas = \App\Upazilla::where("district_id",$id)->pluck("name","id");
        return json_encode($upazillas);

    }



    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'division' => 'required|integer',
            'district' => 'required|integer',
            'upazilla' => 'required|integer',
            'contact' => 'required',
            'fever' => 'required',
            'cough' => 'required',
        ]);

        \App\TestRequest::create($request->all());

        return redirect('/apply')->with('status', 'Request Submitted');

    }

}
