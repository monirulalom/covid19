<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DistrictController extends Controller
{
    //
    public function getDivisions()
    {
        $divisions = DB::table('divisions')->pluck("name","id");
        return view('test',compact('divisions'));
    }

}
