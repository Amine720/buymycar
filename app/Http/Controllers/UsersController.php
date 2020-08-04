<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        return view('users.index')->with('users', User::all());
    }

    public function show(){
        return view('users.profile')->with('user', auth()->user());
    }

    public function update(Request $request, User $user){
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'city' => $request->city,
            'fburl' => $request->fburl,
        ]);
        return redirect(route('profile.user'));
    }

    public function delete(User $user){
        $user->delete();
        return view('users.index')->with('users', User::all());
    }

}
