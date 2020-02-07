<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
     protected $fillable = [
       'id', 'user_id', 'title', 'brand_id','model_id', 'cc', 'city_id','kilometers', 'driver', 'fuel','color', 'price', 'description', 'slug',
    ];

     public function car2()
    {
    	return $this->hasOne('App\Cars2', 'car_id', 'id');
    }

    public function brand()
    {
    	return $this->hasOne('App\Brand', 'id', 'brand_id');
    }

    public function model()
    {
    	return $this->hasOne('App\CarsModel', 'id', 'model_id');
    }

    public function city()
    {
    	return $this->hasOne('App\City', 'id', 'city_id');
    }


}
