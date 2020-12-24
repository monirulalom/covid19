<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Subscriber;
use App\Alert;
use App\Mail\CovidUpdate;

class AlertController extends Controller
{
    function index(){
        return view('subscriber');
    }

    function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:subscribers',
        ]);

        $subscriber = new Subscriber();
        $subscriber->name = $request->name;
        $subscriber->email = $request->email;
        $subscriber->save();
        return redirect('/alert')->with('status', 'Submitted');
    }

    function list(){

        $alerts = Alert::all();
        return view('alert',compact('alerts'));
        
    }
    function add(){
        return view('addalert');
    }

    function save(Request $request){
    
        $validatedData = $request->validate([
            'message' => 'required'
        ]);

        $subcribers = Subscriber::all();

        $alert = new Alert();

        $alert->message = $request->message;
        $alert->save();

        foreach($subcribers as $sub)
        {
            Mail::to($sub->email)->send(new CovidUpdate($alert));
        }

        return redirect('/admin/alerts')->with('status', 'Request Submitted');
    }

    function sublist(){
        $subscribers = Subscriber::all();
        return view('subscribers',compact('subscribers'));
    }
}
