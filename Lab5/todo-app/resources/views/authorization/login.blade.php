@extends('layouts.app')

@section('title', 'Log-in')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
        <form method="POST" class="p-4" action="{{ route('storeLogin') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            @error('password')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <button
                class="w-full mt-4 bg-violet-500 text-white font-semibold py-2 rounded hover:bg-violet-800 hover:text-green-400 transition duration-200 ease-in-out">
                Login
            </button>
        </form>
        <p class="mt-4 text-sm text-center text-gray-600">
            Have no account?
            <a href="{{ route('authorization.register') }}" class="text-indigo-600 hover:underline">Register</a>
        </p>
    </div>
</div>
@endsection