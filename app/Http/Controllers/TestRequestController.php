<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequestController extends Controller
{
    //

    function index(){
        return view('test');
    }
}
