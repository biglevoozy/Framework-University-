@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')

<div class="w-3/4 pt-20 flex flex-col items-center m-auto">
    <x-task :task="$task" />
    <a href="{{ route('task.edit', ['task' => $task['id']]) }}">
        <button
            class="mt-4 bg-violet-500 mb-10 py-2 px-4  text-white font-semibold rounded hover:bg-violet-800 hover:text-green-400 transition duration-200 ease-in-out">
            Edit Task
        </button>
    </a>
</div>

@endsection