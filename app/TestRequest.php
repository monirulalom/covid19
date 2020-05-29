<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestRequest extends Model
{
    //
    protected $fillable = ['name','email','division','district','upazilla','contact','fever','cough'];
}
