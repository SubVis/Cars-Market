<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
     protected $fillable = [
        'user_id', 'title', 'brand_id','model_id', 'cc', 'city_id','kilometers', 'driver', 'fuel','color', 'price', 'description', 'slug',
    ];
}
