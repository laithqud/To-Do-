<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        return view('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }

    public function check(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    
        // Check if the user exists by email
        $register = Register::where('email', $request->email)->first();
        // $name=Register::where('name',)
        
        // If user exists and password is correct
        if ($register && Hash::check($request->password, $register->password)) {
            // Log the user in using the custom 'Register' model
            Auth::login($register);
    
            // Redirect to the homepage
            return view('home'); // Make sure you have a 'home' route
        }
    
        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }
    
}
