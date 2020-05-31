<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    //
    public $timestamps = false;
    public function district(){
        return $this->belongsTo('App\District');
    }

    function upazillas(){
        return $this->belongsToMany('\App\Application');
    }
}
