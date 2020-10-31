<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    function zone(){
        return $this->belongsToMany('\App\Zone');
    
    }
    function division(){
        return $this->belongsToMany('App\Division','areas', 'id', 'division_id');

    }
    function district(){
        return $this->belongsToMany('\App\District','areas', 'id', 'district_id');
    
    }
    function upazilla(){
        return $this->belongsToMany('\App\Upazilla','areas', 'id', 'upazilla_id');
    
    }
}
