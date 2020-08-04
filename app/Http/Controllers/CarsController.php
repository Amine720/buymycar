<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index(){
        return view('cars.allcars')->with('cars', DB::table('cars')->where('active', 1)->get());
    }

    public function newcars(){
        return view('cars.newcars')->with('cars', DB::table('cars')->where('active', 0)->get());
    }

    public function makeactive(Car $car){
        $car->active = true;
        $car->save();
        return view('cars.newcars')->with('cars', DB::table('cars')->where('active', 0)->get());
    }

    public function delete(Car $car){
        $car->delete();
        return view('cars.allcars')->with('cars', Car::all());
    }
}
