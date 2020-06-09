<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatuscheckController extends Controller
{
    //
    function index(){
        return view('statuscheck');
    }
}
