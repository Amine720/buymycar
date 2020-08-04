<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class SellCarController extends Controller
{
    public function index(){
        return view('cars.create');
    }

    public function create(Request $request){
        
        $images = array();
        foreach($request->images as $image){
            $images[] = $image->store('cars');
        }
        $images = implode('|', $images);
        $car = Car::create([
            'images' => $images,
            'maker' => $request->maker,
            'year' => $request->year,
            'city' => $request->city,
            'price' => $request->price,
            'mileage' => $request->mileage,
            'description' => $request->description,
            'type' => $request->type,
            'doors' => $request->doors,
            'cylinders' => $request->cylinders,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('home'));

    }
}
