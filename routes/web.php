<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'role']], function () {
   Route::get('master-home', [App\Http\Controllers\HomeController::class, 'masterHome'])->name('master.home');
});