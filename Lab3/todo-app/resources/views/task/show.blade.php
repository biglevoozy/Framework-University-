@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')

<div class="w-3/4 pt-20 flex flex-col items-center m-auto">
    <x-task :task="$task" />
</div>

@endsection