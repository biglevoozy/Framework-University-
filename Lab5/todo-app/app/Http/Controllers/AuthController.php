<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function register()
    {
        return view('authorization.register');
    }
    public function storeRegister(AuthRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);
    }
    public function login()
    {
        return view('authorization.login');
    }
    public function storeLogin()
    {

    }

    public function logout()
    {

    }
}
