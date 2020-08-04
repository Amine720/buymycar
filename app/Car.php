<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    protected $fillable = [
        'images',
        'maker',
        'year',
        'city',
        'price',
        'mileage',
        'description',
        'type',
        'doors',
        'cylinders',
        'transmission',
        'fuel',
        'user_id'
    ];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

}
