<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index' , [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'min:3' , 'max:255'],
            'email' => ['required', 'email:dns' ,'min:3', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull , Please Login!');
    }
}
