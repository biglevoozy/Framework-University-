<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = [
            [
                'id' => 1,
                'title' => 'Complete Documentation',
                'description' => 'Finish writing the documentation for the project.',
                'created_at' => '2024-10-01 10:00:00',
                'updated_at' => '2024-10-02 12:00:00',
                'priority' => 'High',
                'status' => true,
                'assignee' => 'John Doe',
            ],
            [
                'id' => 2,
                'title' => 'Fix Bugs',
                'description' => 'Identify and resolve bugs reported by the QA team.',
                'created_at' => '2024-10-03 09:00:00',
                'updated_at' => '2024-10-04 14:00:00',
                'priority' => 'Medium',
                'status' => false,
                'assignee' => 'Jane Smith',
            ],
            [
                'id' => 3,
                'title' => 'Implement Feature X',
                'description' => 'Develop and integrate Feature X into the current system.',
                'created_at' => '2024-10-05 08:30:00',
                'updated_at' => '2024-10-06 11:00:00',
                'priority' => 'Low',
                'status' => true,
                'assignee' => 'Alex Johnson',
            ]
        ];
        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'task stored';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = [
            'id' => 3,
            'title' => 'Implement Feature X',
            'description' => 'Develop and integrate Feature X into the current system.',
            'created_at' => '2024-10-05 08:30:00',
            'updated_at' => '2024-10-06 11:00:00',
            'priority' => 'Low',
            'status' => true,
            'assignee' => 'Alex Johnson',
        ];

        return view('task.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'task edited' . $id;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'task updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'task destroyed';
    }
}
