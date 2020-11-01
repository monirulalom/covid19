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



        return view('index',compact('no_of_application','applied_today','applied_yesterday','application_increase','application_up'));
    }
}
