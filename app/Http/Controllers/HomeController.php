<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $reqs = Application::all();
        return view('dashboard',compact('reqs'));
    }
}
