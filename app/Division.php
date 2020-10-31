<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    public $timestamps = false;

    public function district(){
        return $this->hasMany('App\District');
    }

    
    public function applications(){
        return $this->belongsToMany('App\Application','application_location');
    }
    function area(){
        return $this->belongsToMany(
            'App\Area','areas'
        );
    
    }

}

