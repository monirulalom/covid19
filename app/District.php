<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public $timestamps = false;
    public function division(){
        return $this->benlongsTo('App\Division');
    }
    public function upazilla(){
        return $this->hasMany('\App\Upazilla');
    }
}
