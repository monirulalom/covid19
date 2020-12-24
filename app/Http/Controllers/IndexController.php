<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Application;
use App\Patient;

class IndexController extends Controller
{
    public function  index(){

        $no_of_application = Application::all()->count();

        $applied_today = Application::whereDate( 'created_at', '=', Carbon::today() )->count();

        $applied_yesterday = Application::whereDate( 'created_at', '=', Carbon::yesterday() )->count();

        $application_increase = abs($applied_today - $applied_yesterday);

        $application_up = true;
        if($applied_today<$applied_yesterday)
            $application_up = false;

        $positive = Application::whereHas(
            'status', function($q){
                $q->where('id', '4');
            }
        )->count();

        $positive_today = Application::whereHas(
            'status', function($q){
                $q->where('id', '4');
            }
        )->whereDate( 'created_at', '=', Carbon::today() )->count();

        

        $positive_yesterday = Application::whereHas(
            'status', function($q){
                $q->where('id', '4');
            }
        )->whereDate( 'created_at', '=', Carbon::yesterday() )->count();

        $positive_increase = abs($positive_today - $positive_yesterday);

        $positive_up = true;
        if($applied_today<$applied_yesterday)
            $positive_up = false;

        $dead_today = Patient::where('status','Dead')->whereDate( 'created_at', '=', Carbon::today() )->count();
        $dead_total = Patient::where('status','Dead')->count();
        $dead_yesterday = Patient::where('status','Dead')->whereDate( 'created_at', '=', Carbon::yesterday() )->count();


        $dead_increase = abs($dead_today - $dead_yesterday);

        $dead_up = true;
        if($dead_today<$dead_yesterday)
            $dead_up = false;

        $recovered_today = Patient::where('status','Recovered')->whereDate( 'created_at', '=', Carbon::today() )->count();
        $recovered_total = Patient::where('status','Recovered')->count();
        $recovered_yesterday = Patient::where('status','Recovered')->whereDate( 'created_at', '=', Carbon::yesterday() )->count(); 

        $recovered_increase = abs($recovered_today - $recovered_yesterday);

        $recovered_up = true;
        if($recovered_today<$recovered_yesterday)
            $recovered_up = false;


        return view('index',compact('no_of_application','applied_today','applied_yesterday','application_increase','application_up','positive','positive_today','positive_yesterday','dead_today','dead_total','dead_yesterday','recovered_today','recovered_yesterday','recovered_total','dead_up','recovered_up','dead_increase','recovered_increase','positive_increase','positive_up'));
    }
}
