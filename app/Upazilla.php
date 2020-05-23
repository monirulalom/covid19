<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    //
    public $timestamps = false;
    public function district(){
        return $this->benlongsTo('App\District');
    }
}
