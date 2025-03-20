<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
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

    public function deleteCategory($id)
    {
        $category = Home::findOrFail($id);
        $category->tasks()->delete(); // Delete all tasks under this category
        $category->delete(); // Delete the category itself

        return redirect()->route('home')->with('success', 'Category deleted successfully.');
    }

}
