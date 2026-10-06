<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use App\Http\Middleware\CheckLogin;

Route::get('/', function () {
    $userId = session('user_id');

    $user = User::find($userId);

    return $user->name;
})->middleware(CheckLogin::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'showRegister']);
Route::post('/register', [RegisterController::class, 'register']);

