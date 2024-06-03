<?php

use Illuminate\Support\Facades\Route;
use App\Models\Roles;

/*Route::get('/', function () {
    $roles=Roles::select('*')->get();
    return view('welcome', compact('roles'));
});*/

Route::group(['middleware' => ['auth', 'admin']], function () {
   Route::get('/admin_register', [App\Http\Controllers\Auth\AdminController::class, 'showRegistrationForm']);
   Route::post('/admin_register', [App\Http\Controllers\Auth\AdminController::class, 'register'])->name('admin_register');


});

Route::get('/admin_services', [App\Http\Controllers\CommonController::class, 'admin_services'])->name('admin_services');
Route::post('/admin_services', [App\Http\Controllers\CommonController::class, 'serviceAdd'])->name('service.add');
Route::post('/admin_services_update', [App\Http\Controllers\CommonController::class, 'serviceUpdate'])->name('service.update');

Route::get('/raitan_signin', [App\Http\Controllers\Auth\AdminController::class, 'showLoginForm']);
Route::post('/raitan_signin', [App\Http\Controllers\Auth\AdminController::class, 'login'])->name('raitan_signin');

Route::get('/', [App\Http\Controllers\CommonController::class, 'indexroot'])->name('indexroot');
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register-thankyou', [App\Http\Controllers\Auth\RegisterController::class, 'registerthankyou'])->name('register.thankyou');

Route::group(['middleware' => ['auth', 'role']], function () {
   Route::get('master-home', [App\Http\Controllers\HomeController::class, 'masterHome'])->name('master.home');
   Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('staff-home', [App\Http\Controllers\HomeController::class, 'staffHome'])->name('staff.home');
   Route::get('customercare-home', [App\Http\Controllers\HomeController::class, 'customercareHome'])->name('customercare.home');
   Route::get('sales-home', [App\Http\Controllers\HomeController::class, 'salesHome'])->name('sales.home');
   Route::get('agents-home', [App\Http\Controllers\HomeController::class, 'agentsHome'])->name('agents.home');
   Route::get('sellers-home', [App\Http\Controllers\HomeController::class, 'sellersHome'])->name('sellers.home');
   Route::get('customers-home', [App\Http\Controllers\HomeController::class, 'customersHome'])->name('customers.home');
});

Route::group(['middleware' => ['auth']], function () {
   Route::get('password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'index'])->name('password');
   Route::post('change-password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'changePassword'])->name('change.password');

   Route::get('machines', [App\Http\Controllers\MachineImplementorsController::class, 'indexmachine'])->name('machines');
   Route::post('machine-add', [App\Http\Controllers\MachineImplementorsController::class, 'machineAdd'])->name('machine.add');
   Route::post('machine-update', [App\Http\Controllers\MachineImplementorsController::class, 'machineUpdate'])->name('machine.update');

   Route::get('implementors', [App\Http\Controllers\MachineImplementorsController::class, 'indeximplementors'])->name('implementors');
   Route::post('implementor-add', [App\Http\Controllers\MachineImplementorsController::class, 'implementorAdd'])->name('implementor.add');
   Route::post('implementor-update', [App\Http\Controllers\MachineImplementorsController::class, 'implementorUpdate'])->name('implementor.update');
});

Route::get('verify-email/{pass_code}/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'verifyEmail'])->name('verify.email');

Route::get('roles-home', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.home');
Route::post('role-update', [App\Http\Controllers\RolesController::class, 'roleUpdate'])->name('role.update');
Route::post('role-add', [App\Http\Controllers\RolesController::class, 'roleAdd'])->name('role.add');
Route::get('tractors-home', [App\Http\Controllers\TractorsController::class, 'index'])->name('tractors.home');
Route::get('page-not-found', [App\Http\Controllers\CommonController::class, 'pagenotfound'])->name('pagenotfound.home');
Route::get('product-details', [App\Http\Controllers\CommonController::class, 'productdetails'])->name('productdetails.home');
Route::get('services', [App\Http\Controllers\CommonController::class, 'services'])->name('service.home');
Route::get('contactus', [App\Http\Controllers\CommonController::class, 'contactus'])->name('contactus.home');
Route::get('faq', [App\Http\Controllers\CommonController::class, 'faqs'])->name('faq.home');
Route::get('aboutus', [App\Http\Controllers\CommonController::class, 'aboutus'])->name('aboutus.home');

