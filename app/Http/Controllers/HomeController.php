<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Application;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqs = Application::paginate(15);
        return view('dashboard',compact('reqs'));
    }
    public function new()
    {
        $reqs = Application::whereHas(
            'status', function($q){
                $q->where('id', '1');
            }
        )->whereDate( 'created_at', '<=', Carbon::now()->addDays( 2 ) )->paginate();
        return view('dashboard',compact('reqs'));
    }

}
