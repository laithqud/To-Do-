<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }


    public function create(Request $request){

        $request->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|email|unique:registers',
            'phone'=>'required|string|max:10',
            'password'=>'required|string|min:8|confirmed'
        ]);

        Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password'=> Hash::make($request->password),
        ]);


        return redirect()->route('login.show')->with([
            'success' => 'Registration successful! You can now log in.'
        ]);
    }
}
