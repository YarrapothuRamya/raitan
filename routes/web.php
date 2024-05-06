<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'role']], function () {
   Route::get('master-home', [App\Http\Controllers\HomeController::class, 'masterHome'])->name('master.home');
   Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('staff-home', [App\Http\Controllers\HomeController::class, 'staffHome'])->name('staff.home');
   Route::get('sales-home', [App\Http\Controllers\HomeController::class, 'salesHome'])->name('sales.home');
   Route::get('agents-home', [App\Http\Controllers\HomeController::class, 'agentsHome'])->name('agents.home');
   Route::get('sellers-home', [App\Http\Controllers\HomeController::class, 'sellersHome'])->name('sellers.home');
   Route::get('customers-home', [App\Http\Controllers\HomeController::class, 'customersHome'])->name('customers.home');
});

Route::get('roles-home', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.home');
Route::post('role-update', [App\Http\Controllers\RolesController::class, 'roleUpdate'])->name('role.update');
Route::post('role-add', [App\Http\Controllers\RolesController::class, 'roleAdd'])->name('role.add');