<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $task = Task::latest()->first(); // finding the last task in DB
        $category = Category::where('id', $task->category_id)->first();

        if (!$category) {
            abort(404, 'Category not found');
        }

        $task->category_name = $category->name;
        return view('home.index', compact('task'));
    }
    public function about()
    {
        return view('home.about');
    }
}