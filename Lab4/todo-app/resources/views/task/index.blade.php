@extends('layouts.app')

@section('title', 'All tasks')

@section('content')

<div class="w-3/4 pt-20 pb-2 flex flex-col items-center m-auto">
    @if(session('success'))
        <div id="modal"
            class="fixed w-full h-20 inset-0 flex justify-center transition-all ease-in-out duration-1000 -mt-20">
            <div class="flex justify-center bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                <h2 class="text-md font-semibold">{{ session('success') }}</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="text-green-500 size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
        </div>
    @endif
    <h1 class="text-2xl">All tasks in</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 py-3 gap-6 ">
        @foreach ($tasks as $task)
            <a href="{{ route('task.show', ['task' => $task['id']]) }}">
                <div class="h-40 p-3 border border-black rounded-xl">
                    <h1 class="text-lg pb-2 pt-3"> - {{ $task['title']}}</h1>
                    <p class> {{$task['description'] }} </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@vite('resources/js/modal.js')
@endsection