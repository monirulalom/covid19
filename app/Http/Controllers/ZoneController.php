<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;
use App\Area;
use App\Division;
use App\District;
use App\Upazilla;

class ZoneController extends Controller
{
    public function index(){

        $areas = Area::all();


        return view('zone',compact('areas'));

    }
    public function new()
    {
        $zones = Zone::all();
        // $divisions = DB::table('divisions')->pluck("name","id");
        $divisions = Division::all()->pluck("name","id");
        return view('addzone',compact('divisions','zones'));
    }

    public function add(Request $request){

        $validatedData = $request->validate([
            'division' => 'required|integer',
            'district' => 'required|integer',
            'upazilla' => 'required|integer',
            'zone' => 'required|integer',
        ]);

        $area = new Area();
        $area->division_id = $request->division;
        $area->district_id = $request->district;
        $area->upazilla_id = $request->upazilla;
        $area->save();
        $area->zone()->attach( $request->zone);

        return redirect('/admin/zone');
    }
    public function green(){

        $areas = Area::whereHas(
            'zone', function($q){
                $q->where('id', '1');
            }
        )->get();


        return view('zone',compact('areas'));
    }
    public function yellow(){

        $areas = Area::whereHas(
            'zone', function($q){
                $q->where('id', '2');
            }
        )->get();


        return view('zone',compact('areas'));
    }
    public function red(){

        $areas = Area::whereHas(
            'zone', function($q){
                $q->where('id', '3');
            }
        )->get();


        return view('zone',compact('areas'));
    }
    public function lockdown(){

        $areas = Area::whereHas(
            'zone', function($q){
                $q->where('id', '4');
            }
        )->get();


        return view('zone',compact('areas'));
    }

    public function delete($id){
        $area = Area::findOrfail($id);
        $area->delete();

        return redirect('/admin/zone');
    }
}
