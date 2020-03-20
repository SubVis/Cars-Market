<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
     protected $fillable = [
       'id', 'user_id', 'title', 'brand_id','model_id', 'cc', 'city_id','driver_id', 'modelyear_id', 'fuel_id', 'color_id','kilometers', 'driver', 'fuel','color', 'price', 'description', 'slug',
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
       public function driver()
    {
        return $this->hasOne('App\Driver', 'id', 'driver_id');
    }
       public function color()
    {
        return $this->hasOne('App\Color', 'id', 'color_id');
    }
       public function fuel()
    {
        return $this->hasOne('App\Fuel', 'id', 'fuel_id');
    }
        public function modelyear()
    {
        return $this->hasOne('App\Modelyear', 'id', 'modelyear_id');
    }


}
