@extends('layouts.app')

@section('title', 'All tasks')

@section('content')

<div class="w-3/4 pt-20 pb-2 flex flex-col items-center m-auto">
    <h1 class="text-2xl">All tasks in</h1>
    <div class="grid grid-cols-5 py-3 gap-6">
        @foreach ($tasks as $task)
            <div class="p-3 border border-black rounded-xl">
                <h1 class="text-lg pb-2 pt-3"> - {{ $task['title']}}</h1>
                <p class> {{$task['description'] }} </p>
            </div>
        @endforeach
    </div>
</div>

@endsection