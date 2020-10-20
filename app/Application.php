<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Application extends Model
{
    //
    protected $guarded= [];
 

    function division(){
        return $this->belongsToMany('\App\Division','application_location');
    
    }
    function district(){
        return $this->belongsToMany('\App\District','application_location');
    
    }
    function upazilla(){
        return $this->belongsToMany('\App\Upazilla','application_location');
    
    }
    function status(){
        return $this->belongsToMany('\App\Status','application_status');
    
    }
}
