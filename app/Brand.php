<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $filltable = [
    	'id', 'name',
    ];


    public function cars()
    {
       return $this->hasMany('App\Car', 'brand_id');
    }
}
