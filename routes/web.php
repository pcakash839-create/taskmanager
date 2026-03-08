<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\AuthController;


Route::get('/', function () {
    return redirect('/login');
});


Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::resource('tasks', App\Http\Controllers\TaskController::class);
Route::resource('users', App\Http\Controllers\UserController::class);

Route::post('/loginAttempt',[AuthController::class,'login'])->name('login');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('registerUser');
