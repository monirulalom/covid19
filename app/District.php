<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public $timestamps = false;
    public function division(){
        return $this->belongsTo('App\Division');
    }
    public function upazilla(){
        return $this->hasMany('\App\Upazilla');
    }

    function districts(){
        return $this->belongsToMany('\App\Application','application_location');
    }
}
