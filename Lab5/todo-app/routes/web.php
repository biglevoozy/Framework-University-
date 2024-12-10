<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'user'])->name('home.user')->middleware('auth');
;

// Route::controller(TaskController::class)->prefix('task')->name('task.')->group(function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/create', 'create')->name('create');
//     Route::post('/', 'store')->name('store');
//     Route::get('/{id}/show', 'show')->name('show')->where('id', '[0-9]+');
//     Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
//     Route::put('/{id}', 'update')->name('update')->where('id', '[0-9]+');
//     Route::delete('/{id}', 'destroy')->name('destroy')->where('id', '[0-9]+');
// });

Route::resource('task', TaskController::class);

Route::get('/login', [AuthController::class, 'login'])->name('authorization.login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('storeLogin');
Route::get('/register', [AuthController::class, 'register'])->name('authorization.register');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('storeRegister');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');