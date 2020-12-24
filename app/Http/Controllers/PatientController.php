<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Application;

class PatientController extends Controller
{
    function treat($id){
        $application = Application::find($id);

        $patient = new Patient();

        $patient->name = $application->name;
        $patient->email = $application->email;
        $patient->address = $application->district->first()->name;
        $patient->status = "In hospital";
        $patient->save();
        return redirect('admin/patients');
    }
    function quarentine($id){
        $application = Application::find($id);

        $patient = new Patient();

        $patient->name = $application->name;
        $patient->email = $application->email;
        $patient->address = $application->district->first()->name;
        $patient->status = "In quarentine";
        $patient->save();
        return redirect('admin/patients');
    }

    function list(){

        $patients = Patient::all();


        return view('patient',compact('patients'));
    }

    function edit($id){
        $patient = Patient::findOrFail($id);

        return view('editpatient',compact('patient'));
    }

    function update(Request $request,$id){
        $patient = Patient::findOrFail($id);

        $patient->status = $request->status;
        $patient->save();

        return redirect('admin/patients');
    }




    function inhospital(){
        $patients = Patient::where('status','In hospital')->get();
        return view('patient',compact('patients'));
    }
    function pquarentine(){
        $patients = Patient::where('status','In quarentine')->get();
        return view('patient',compact('patients'));
    }

    function recovered(){
        $patients = Patient::where('status','Recovered')->get();
        return view('patient',compact('patients'));
    }
    function dead(){
        $patients = Patient::where('status','Dead')->get();
        return view('patient',compact('patients'));
    }

}

