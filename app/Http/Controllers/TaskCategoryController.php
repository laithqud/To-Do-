<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskCategoryController extends Controller
{

    public function show(){
        return view('');
    } 
    public function addTask(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id, // Link task to category
        ]);

        return redirect()->route('home');
    }
    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('home')->with('success', 'Task deleted successfully!');
    }

}