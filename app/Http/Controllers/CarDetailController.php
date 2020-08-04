<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;

class CarDetailController extends Controller
{
    public function index($id){
        $car = Car::find($id);
        $user = $car->user()->get();
        return view('detail.index')->with('car', $car)->with('user', $user[0]);
    }
}
