<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modele;

class Brand extends Model
{

    protected $fillable = ['name'];
    
    public function models(){
        return $this->hasMany(Modele::class);
    }

}
