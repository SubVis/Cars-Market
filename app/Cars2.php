<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars2 extends Model
{
	protected $table = 'cars2';
	
	protected $fillable = [
     	'car_id','image','comfort',	'windows',	'sounds',	'safe',	'other_future'
    ];
    	
}
