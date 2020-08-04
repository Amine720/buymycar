<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;

class Modele extends Model
{

    protected $fillable = ['name'];
    
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
