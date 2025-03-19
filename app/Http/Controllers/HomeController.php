<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Home::with('tasks')->get(); // ✅ Correct (Home is the categories model)
        return view('home', compact('categories'));
    }
    

    public function add(Request $request){

        $request->validate([
            'name'=>'required|string|unique:categories'
        ]);

        Home::create([
            'name'=>$request->name,
        ]);

        return redirect()->route('home');
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
    public function show(Home $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteCategory($id)
    {
        $category = Home::findOrFail($id);
        $category->tasks()->delete(); // Delete all tasks under this category
        $category->delete(); // Delete the category itself

        return redirect()->route('home')->with('success', 'Category deleted successfully.');
    }

}
