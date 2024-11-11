@extends('layouts.app')

@section('title', 'Create a task')

@section('content')
<div class="w-3/4 pt-20 pb-4 flex flex-col items-center m-auto">
    <h1 class="text-3xl py-4">Create a task.</h1>
    <form class="flex flex-col gap-4 p-4 bg-gray-100 rounded-lg shadow-lg max-w-md mx-auto"
        action="{{ route('task.store') }}" method="POST">
        @csrf
        <label class="flex flex-col text-sm font-medium text-gray-700">
            Task Name
            <input class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="text" name="title" placeholder="Enter task name">
        </label>

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Description
            <input class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="text" name="description" placeholder="Enter task description">
        </label>

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Category ID
            <input class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="number" name="category_id" placeholder="Enter category ID">
        </label>

        <button
            class="mt-4 bg-violet-500 text-white font-semibold py-2 rounded hover:bg-violet-800 hover:text-green-400 transition duration-200 ease-in-out">
            Create Task
        </button>
    </form>

</div>
@endsection