<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use Date;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;
use App\Models\Category;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('task.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTaskRequest $request)
    {
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'due_date' => $request->input('due_date')
        ]);

        return redirect()->route('task.index')->with('success', 'Task successfully made!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::with('tags')->findOrFail($id);
        $category = Category::where('id', $task->category_id)->first();

        if (!$category) {
            abort(404, 'Category not found');
        }

        $task->category_name = $category->name;

        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        $categories = Category::all();

        return view('task.edit', compact("task", "categories"));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, string $id)
    {
        Task::findOrFail($id)->update(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id'),
                'due_date' => $request->input('due_date')
            ]
        );

        return redirect()->route('task.index')->with('success', 'Task successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::findOrFail($id)->delete();
        return redirect()->route('task.index');
    }
}
