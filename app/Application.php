<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $guarded= [];

    function divisions(){
        return $this->belongsToMany('\App\Division','application_location');
    
    }
    function districts(){
        return $this->belongsToMany('\App\District','application_location');
    
    }
    function upazillas(){
        return $this->belongsToMany('\App\Upazilla','application_location');
    
    }
}
