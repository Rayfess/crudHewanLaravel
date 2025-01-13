<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HewanController;


Route::get('/', function () {
    return view('home');
});


// sumber daya yang mengelola crud
Route::resource('hewan', HewanController::class);

Route::get('register', [AuthController::class, 'showRegis'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');;
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/hewan', function () {
        return view('hewan.index');
    });
});
