@extends('layouts.app')

@section('title', 'Create a task')

@section('content')
<div class="w-3/4 pt-20 pb-2 flex flex-col items-center m-auto">
    <h1 class="text-3xl py-4">Create a task.</h1>
    <form class="flex flex-col gap-2 border border-red-900" action="">
        <input class="border border-black" type="text">
        <input class="border border-black" type="text">
        <input class="border border-black" type="text">
    </form>
</div>
@endsection