@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')

<div class="container mx-auto py-10 px-4 mt-16">
    <!-- Заголовок -->
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-gray-800">Добро пожаловать, {{Auth::user()->name}} !</h1>
        <p class="text-gray-600 mt-2">Здесь вы можете управлять своим профилем, задачами и настройками.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800">Информация профиля</h2>
            <ul class="mt-4 text-gray-600">
                <li><strong>Имя:</strong> {{Auth::user()->name}} </li>
                <li><strong>Email:</strong> {{Auth::user()->email}} </li>
                <li><strong>Дата регистрации:</strong> {{Auth::user()->created_at->format('d.m.Y')}} </li>
            </ul>

        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800">Ваши задачи</h2>
            <ul class="mt-4">

            </ul>
            <a href="{{ route('task.create') }}"
                class="inline-block mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Добавить задачу
            </a>
        </div>
    </div>

</div>

@endsection