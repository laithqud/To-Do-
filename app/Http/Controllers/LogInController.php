<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
   

    public function show()
    {
        return view('login');
    }


    public function check(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        $register = Register::where('email', $request->email)->first();
       
        
        if ($register && Hash::check($request->password, $register->password)) {
          
            Auth::login($register);
    
           $categories= Home::with('tasks')->get();
            return view('home',compact('categories')); 
        }
    
        return redirect()->back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }
    
}
