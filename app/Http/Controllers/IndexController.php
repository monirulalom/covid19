<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Application;

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



        return view('index',compact('no_of_application','applied_today','applied_yesterday','application_increase','application_up','positive','positive_today','positive_yesterday'));
    }
}
