<?php

use Illuminate\Support\Facades\Route;
use App\Models\Roles;

/*Route::get('/', function () {
    $roles=Roles::select('*')->get();
    return view('welcome', compact('roles'));
});*/

Route::group(['middleware' => ['auth', 'admin']], function () {
   Route::get('/raitan_admin/admin_register', [App\Http\Controllers\Auth\AdminController::class, 'showRegistrationForm']);
   Route::post('/raitan_admin/admin_register', [App\Http\Controllers\Auth\AdminController::class, 'register'])->name('admin_register');
   
   Route::get('/raitan_admin/approve_permissions', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions'])->name('approve_permissions');
   Route::post('/reject_permissions', [App\Http\Controllers\Auth\AdminController::class, 'reject_permissions_users'])->name('reject_permissions_users');
   Route::post('/approve_permissions', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_users'])->name('approve_permissions_users');


   Route::get('/approve_permissions_sales', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_sales'])->name('approve_permissions_sales');
   Route::post('/reject_permissions_sales', [App\Http\Controllers\Auth\AdminController::class, 'reject_permissions_users_sales'])->name('reject_permissions_users_sales');
   Route::post('/approve_permissions_sales', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_users_sales'])->name('approve_permissions_users_sales');

   Route::get('/approve_permissions_agents', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_agents'])->name('approve_permissions_agents');
   Route::post('/reject_permissions_agents', [App\Http\Controllers\Auth\AdminController::class, 'reject_permissions_users_agents'])->name('reject_permissions_users_agents');
   Route::post('/approve_permissions_agents', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_users_agents'])->name('approve_permissions_users_agents');

   Route::get('/approve_permissions_sellers', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_sellers'])->name('approve_permissions_sellers');
   Route::post('/reject_permissions_sellers', [App\Http\Controllers\Auth\AdminController::class, 'reject_permissions_users_sellers'])->name('reject_permissions_users_sellers');
   Route::post('/approve_permissions_sellers', [App\Http\Controllers\Auth\AdminController::class, 'approve_permissions_users_sellers'])->name('approve_permissions_users_sellers');
});

Route::get('/admin_services', [App\Http\Controllers\CommonController::class, 'admin_services'])->name('admin_services');
Route::post('/admin_services', [App\Http\Controllers\CommonController::class, 'serviceAdd'])->name('service.add');
Route::post('/admin_services_update', [App\Http\Controllers\CommonController::class, 'serviceUpdate'])->name('service.update');

Route::get('/raitan_signin', [App\Http\Controllers\Auth\AdminController::class, 'showLoginForm']);
Route::post('/raitan_signin', [App\Http\Controllers\Auth\AdminController::class, 'login'])->name('raitan_signin');

Route::post('/user_register', [App\Http\Controllers\Auth\UserController::class, 'userregister'])->name('user_register');
Route::post('/user_login', [App\Http\Controllers\Auth\UserController::class, 'userlogin'])->name('user_login');

Route::get('/', [App\Http\Controllers\CommonController::class, 'indexroot'])->name('indexroot');
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register-thankyou', [App\Http\Controllers\Auth\RegisterController::class, 'registerthankyou'])->name('register.thankyou');

Route::group(['middleware' => ['auth', 'role']], function () {
   Route::get('/raitan_admin/master-home', [App\Http\Controllers\HomeController::class, 'masterHome'])->name('master.home');
   Route::get('/raitan_admin/master-home', [App\Http\Controllers\HomeController::class, 'masterHome'])->name('master.home');
   Route::get('/raitan_admin/admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('/raitan_admin/staff-home', [App\Http\Controllers\HomeController::class, 'staffHome'])->name('staff.home');
   Route::get('/raitan_admin/customercare-home', [App\Http\Controllers\HomeController::class, 'customercareHome'])->name('customercare.home');
   Route::get('sales-home', [App\Http\Controllers\HomeController::class, 'salesHome'])->name('sales.home');
   Route::get('agents-home', [App\Http\Controllers\HomeController::class, 'agentsHome'])->name('agents.home');
   Route::get('sellers-home', [App\Http\Controllers\HomeController::class, 'sellersHome'])->name('sellers.home');
   Route::get('customers-home', [App\Http\Controllers\HomeController::class, 'customersHome'])->name('customers.home');
});

Route::group(['middleware' => ['auth']], function () {
   Route::get('password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'index'])->name('password');
   Route::post('change-password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'changePassword'])->name('change.password');

   Route::get('/raitan_admin/machines', [App\Http\Controllers\MachineImplementorsController::class, 'indexmachine'])->name('machines');
   Route::post('/raitan_admin/machine-add', [App\Http\Controllers\MachineImplementorsController::class, 'machineAdd'])->name('machine.add');
   Route::get('/raitan_admin/machine-add', [App\Http\Controllers\MachineImplementorsController::class, 'machineAddview'])->name('machine.addview');
   Route::post('/raitan_admin/machine-update', [App\Http\Controllers\MachineImplementorsController::class, 'machineUpdate'])->name('machine.update');
   Route::get('/raitan_admin/machine-update', [App\Http\Controllers\MachineImplementorsController::class, 'machineedit'])->name('machine.edit');

   Route::get('/raitan_admin/implementors', [App\Http\Controllers\MachineImplementorsController::class, 'indeximplementors'])->name('implementors');
   Route::post('/raitan_admin/implementor-add', [App\Http\Controllers\MachineImplementorsController::class, 'implementorAdd'])->name('implementor.add');
   Route::get('/raitan_admin/implementor-add', [App\Http\Controllers\MachineImplementorsController::class, 'implementorAddview'])->name('implementor.addview');
   Route::post('/raitan_admin/implementor-update', [App\Http\Controllers\MachineImplementorsController::class, 'implementorUpdate'])->name('implementor.update');
   Route::get('/raitan_admin/implementor-update', [App\Http\Controllers\MachineImplementorsController::class, 'implementoredit'])->name('implementor.edit');

   Route::get('/raitan_admin/agriculture_labour', [App\Http\Controllers\AgricultureLabourController::class, 'index'])->name('agriculture_labour');
   Route::post('/raitan_admin/agriculturelabour-add', [App\Http\Controllers\AgricultureLabourController::class, 'agriculturelabourAdd'])->name('agriculturelabour.add');
   Route::get('/raitan_admin/agriculturelabour-add', [App\Http\Controllers\AgricultureLabourController::class, 'agriculturelabourAddview'])->name('agriculturelabour.addview');
   Route::post('/raitan_admin/agriculturelabour-update', [App\Http\Controllers\AgricultureLabourController::class, 'agriculturelabourUpdate'])->name('agriculturelabour.update');
   Route::get('/raitan_admin/agriculturelabour-update', [App\Http\Controllers\AgricultureLabourController::class, 'agriculturelabouredit'])->name('agriculturelabour.edit');

   Route::get('/raitan_admin/repairsandservices', [App\Http\Controllers\RepairAndServicesController::class, 'index'])->name('repairsandservices');
   Route::post('/raitan_admin/repairsandservices-add', [App\Http\Controllers\RepairAndServicesController::class, 'repairsandservicesAdd'])->name('repairsandservices.add');
   Route::get('/raitan_admin/repairsandservices-add', [App\Http\Controllers\RepairAndServicesController::class, 'repairaddview'])->name('repairsandservices.addview');
   Route::post('/raitan_admin/repairsandservices-update', [App\Http\Controllers\RepairAndServicesController::class, 'repairsandservicesUpdate'])->name('repairsandservices.update');
   Route::get('/raitan_admin/repairsandservices-update', [App\Http\Controllers\RepairAndServicesController::class, 'repaireditview'])->name('repairsandservices.edit');

   Route::get('/raitan_admin/sprayers', [App\Http\Controllers\SprayersController::class, 'index'])->name('sprayers');
   Route::post('/raitan_admin/sprayers-add', [App\Http\Controllers\SprayersController::class, 'sprayersAdd'])->name('sprayers.add');
   Route::get('/raitan_admin/sprayers-add', [App\Http\Controllers\SprayersController::class, 'sprayersaddview'])->name('sprayers.addview');
   Route::get('/raitan_admin/sprayers-update', [App\Http\Controllers\SprayersController::class, 'sprayersedit'])->name('sprayers.edit');
   Route::post('/raitan_admin/sprayers-update', [App\Http\Controllers\SprayersController::class, 'sprayersUpdate'])->name('sprayers.update');
});

Route::get('verify-email/{pass_code}/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'verifyEmail'])->name('verify.email');

Route::get('/raitan_admin/roles-home', [App\Http\Controllers\RolesController::class, 'index'])->name('role.home');
Route::post('/raitan_admin/role-update', [App\Http\Controllers\RolesController::class, 'roleUpdate'])->name('role.update');
Route::post('/raitan_admin/role-add', [App\Http\Controllers\RolesController::class, 'roleAdd'])->name('role.add');
Route::get('/raitan_admin/role-add', [App\Http\Controllers\RolesController::class, 'roleAddview'])->name('role.addview');
Route::get('/raitan_admin/role-edit', [App\Http\Controllers\RolesController::class, 'roleedit'])->name('role.edit');
Route::get('tractors-home', [App\Http\Controllers\TractorsController::class, 'index'])->name('tractors.home');
Route::get('page-not-found', [App\Http\Controllers\CommonController::class, 'pagenotfound'])->name('pagenotfound.home');
Route::get('product-details', [App\Http\Controllers\CommonController::class, 'productdetails'])->name('productdetails.home');
Route::get('services', [App\Http\Controllers\CommonController::class, 'services'])->name('service.home');
Route::get('contactus', [App\Http\Controllers\CommonController::class, 'contactus'])->name('contactus.home');
Route::get('faq', [App\Http\Controllers\CommonController::class, 'faqs'])->name('faq.home');
Route::get('aboutus', [App\Http\Controllers\CommonController::class, 'aboutus'])->name('aboutus.home');
Route::get('edit-service', [App\Http\Controllers\CommonController::class, 'editservice'])->name('editservice.home');
Route::get('my-profile', [App\Http\Controllers\CommonController::class, 'userprofile'])->name('userprofile.home');
Route::get('my-bookings', [App\Http\Controllers\CommonController::class, 'bookings'])->name('bookings.home');

Route::get('/user_dashboard', [App\Http\Controllers\CommonController::class, 'user_dashboard'])->name('user_dashboard');
Route::post('/add_role_request', [App\Http\Controllers\CommonController::class, 'add_role_request'])->name('add_role_request');
Route::post('/cancel_role_request_user', [App\Http\Controllers\CommonController::class, 'cancel_role_request_user'])->name('cancel_role_request_user');
Route::get('/sales_activity/{master_role_id}', [App\Http\Controllers\CommonController::class, 'sales_activity'])->name('sales_activity');
Route::get('/agent_activity/{master_role_id}', [App\Http\Controllers\CommonController::class, 'agent_activity'])->name('agent_activity');
Route::get('/seller_activity/{master_role_id}', [App\Http\Controllers\CommonController::class, 'seller_activity'])->name('seller_activity');

Route::get('seller-details', [App\Http\Controllers\CommonController::class, 'sellerdetails'])->name('sellerdetails.home');