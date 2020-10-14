<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class statusController extends Controller
{
    public function edit($id){
        
        $application = Application::findOrFail($id);
        
        return view('changestatus',compact('application'));

    }
    public function update(Request $request){

        $application = Application::findOrFail($request->id);

        $application->status()->sync($request->status);

        return redirect()->route('dashboard');

    }
}
