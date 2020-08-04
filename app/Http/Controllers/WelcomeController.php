<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Brand;
use App\Modele;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome')
                ->with('brands', Brand::all())
                ->with('models', Modele::all())
                ->with('cars', DB::table('cars')->where('active', 1)->orderBy('created_at', 'desc')->get()->take(8));
    }
}
