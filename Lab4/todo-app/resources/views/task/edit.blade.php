@props(['task', 'categories'])

@extends('layouts.app')

@section('title', 'Edit a task')

@section('content')
<div class="w-3/4 pt-20 pb-4 flex flex-col items-center m-auto">
    <h1 class="text-3xl py-4">Edit a task.</h1>
    <form class="flex flex-col gap-4 p-4 bg-gray-100 rounded-lg shadow-lg max-w-md mx-auto"
        action="{{ route('task.update', ['task' => $task['id']]) }}" method="POST">
        @csrf
        @method('PUT')
        <label class="flex flex-col text-sm font-medium text-gray-700">
            Task Name
            <input value="{{ $task['title'] }}"
                class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="text" name="title" placeholder="Enter task name">
        </label>

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Description
            <input value="{{ $task['description'] }}"
                class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="text" name="description" placeholder="Enter task description">
        </label>

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Due to
            <input value="{{ $task['due_date'] }}"
                class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="date" name="due_date">
        </label>

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Category
            <select name="category_id"
                class="border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-green-400">
                @foreach ($categories as $category)
                    <option class="text-black" value="{{  $category->id }}" /> {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </label>

        <button
            class="mt-4 bg-violet-500 text-white font-semibold py-2 rounded hover:bg-violet-800 hover:text-green-400 transition duration-200 ease-in-out">
            Update Task
        </button>
    </form>

    <form action="{{ route('task.destroy', ['task' => $task['id']]) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit"
            class="bg-red-500 text-white font-semibold py-2 px-4 rounded hover:bg-red-700 transition duration-200 ease-in-out">
            Delete Task
        </button>
    </form>

</div>
@endsection