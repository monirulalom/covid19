<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    function division(){
        return $this->belongsToMany('\App\Division','areas');
    
    }
    function district(){
        return $this->belongsToMany('\App\District','areas');
    
    }
    function upazilla(){
        return $this->belongsToMany('\App\Upazilla','areas');
    
    }
    function area(){
        return $this->belongsTo('\App\Area');
    }
}
