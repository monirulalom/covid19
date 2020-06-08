<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationReceived;
use App\Application;
use App\Division;
use App\District;
use App\Upaazilla;

use DB;

class ApplicationController extends Controller
{
    //

    public function index()
    {
        // $divisions = DB::table('divisions')->pluck("name","id");
        $divisions = Division::pluck("name","id");
        return view('application',compact('divisions'));
    }
    public function getDistricts($id) 
    {        
       // $districts = DB::table("districts")->where("division_id",$id)->pluck("name","id");
       $districts = Division::find($id)->district->pluck("name","id");

        return json_encode($districts);

    }

    public function getUpazillas($id) 
    {        
       // $districts = DB::table("districts")->where("district_id",$id)->pluck("name","id");
       $upazillas = District::find($id)->upazilla->pluck("name","id");
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

        $application = new Application();

        $application->name = $request->name;
        $application->email = $request->email;
        $application->contact = $request->contact;
        $application->fever = $request->fever;
        $application->cough = $request->cough;
        
        $application->save();

        $application->division()->attach($request->division,['district_id' => $request->district, 'upazilla_id' => $request->upazilla]);

        Mail::to($request->email)->send(new ApplicationReceived());

        return redirect('/apply')->with('status', 'Request Submitted');

    }

}
