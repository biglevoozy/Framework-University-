@extends('layouts.app')

@section('title', 'Create a task')

@section('content')
<div class="w-full pt-16 pb-4 flex flex-col items-center m-auto">
    <h1 class="text-3xl py-4">Create a task</h1>
    <form class="flex flex-col gap-4 my-4 p-4 bg-gray-100 rounded-lg shadow-lg max-w-md "
        action="{{ route('task.store') }}" method="POST">
        @csrf
        @method('POST')
        <label class="flex flex-col text-sm font-medium text-gray-700">
            Task Name
            <input class="border border-gray-300 rounded mt-1 p-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="text" name="title" placeholder="Enter task name">
        </label>
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Description
            <input class="border border-gray-300 rounded mt-1 p-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="text" name="description" placeholder="Enter task description">
        </label>
        @error('description')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Due to
            <input class="border border-gray-300 rounded  mt-1 p-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                type="date" name="due_date">
        </label>
        @error('due_date')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <label class="flex flex-col text-sm font-medium text-gray-700">
            Category
            <select name="category_id"
                class="border border-gray-300 rounded mt-1 p-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                @foreach ($categories as $category)
                    <option class="text-black" value="{{  $category->id }}" /> {{ $category->name }}</option>
                @endforeach
            </select>
        </label>
        @error('caterogy_id')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <button
            class="mt-4 bg-violet-500 text-white font-semibold py-2 rounded hover:bg-violet-800 hover:text-green-400 transition duration-200 ease-in-out">
            Create Task
        </button>
    </form>
</div>
@endsection