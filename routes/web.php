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
Route::post('/customer_logout', [App\Http\Controllers\Auth\UserController::class, 'logout'])->name('customer.logout');
Route::post('/user_profile_update', [App\Http\Controllers\Auth\UserController::class, 'user_profile_update'])->name('customer.user_profile_update');

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


   Route::get('/raitan_admin/service-providers', [App\Http\Controllers\ServiceproviderController::class, 'index'])->name('service_providers');
   Route::post('/raitan_admin/service-providers-add', [App\Http\Controllers\ServiceproviderController::class, 'add'])->name('service_providers.add');
   Route::get('raitan_admin/service-providers/view/{id}', [App\Http\Controllers\ServiceproviderController::class, 'view'])->name('service_providers.view');
   Route::get('/raitan_admin/service-providers-update', [App\Http\Controllers\ServiceproviderController::class, 'edit'])->name('service_providers.edit');
   Route::post('/raitan_admin/service-providers-update', [App\Http\Controllers\ServiceproviderController::class, 'update'])->name('service_providers.update');

   Route::get('/raitan_admin/Business-contact', [App\Http\Controllers\BusinesscontactController::class, 'index'])->name('Business_contact');
   Route::post('/raitan_admin/Business-contact-add', [App\Http\Controllers\BusinesscontactController::class, 'add'])->name('Business_contact.add');
   Route::get('raitan_admin/Business-contact/view/{id}', [App\Http\Controllers\BusinesscontactController::class, 'view'])->name('Business_contact.view');
   Route::get('/raitan_admin/Business-contact-update', [App\Http\Controllers\BusinesscontactController::class, 'edit'])->name('Business_contact.edit');
   Route::post('/raitan_admin/Business-contact-update', [App\Http\Controllers\BusinesscontactController::class, 'update'])->name('Business_contact.update');

   Route::get('/raitan_admin/service-seeker', [App\Http\Controllers\ServiceseekerController::class, 'index'])->name('service-seeker');
   
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

Route::get('serviceproviders', [App\Http\Controllers\CommonController::class, 'serviceprovider'])->name('serviceprovider.home');

Route::get('serviceprovider-details', [App\Http\Controllers\CommonController::class, 'serviceproviderdetails'])->name('serviceprovider.serviceproviderdetails');


Route::get('free-listing', [App\Http\Controllers\CommonController::class, 'listing'])->name('listing.home');
Route::get('business-address', [App\Http\Controllers\CommonController::class, 'businessAddress'])->name('address.home');
Route::post('business-address/add', [App\Http\Controllers\BusinessController::class, 'businessAddressAdd'])->name('address.add');
Route::get('business-contact', [App\Http\Controllers\BusinessController::class, 'showForm'])->name('addcontact.home');
Route::post('free-listing/login', [App\Http\Controllers\BusinessController::class, 'login'])->name('addcontact.login');
Route::post('business-contact', [App\Http\Controllers\BusinessController::class, 'businessContact'])->name('addcontact.home1');
Route::post('business-contact/add', [App\Http\Controllers\BusinessController::class, 'business_Contact_register'])->name('addcontact.add');
Route::get('business-timings/{business_id}', [App\Http\Controllers\CommonController::class, 'businessTimings'])->name('timings.home');
Route::post('business-timings/add', [App\Http\Controllers\BusinessController::class, 'Timings'])->name('timings.add');
Route::get('business-category/{business_id}', [App\Http\Controllers\CommonController::class, 'businessCategory'])->name('category.home');
Route::post('business-category/add', [App\Http\Controllers\BusinessController::class, 'businessCategoryadd'])->name('category.add');
Route::get('business-profile', [App\Http\Controllers\CommonController::class, 'businessProfile'])->name('businessProfile.home');
Route::get('mybusiness', [App\Http\Controllers\CommonController::class, 'mybusiness'])->name('mybusiness.home');
Route::get('advertiseplans', [App\Http\Controllers\CommonController::class, 'advertiseplans'])->name('advertiseplans.home');
Route::get('choose-payment', [App\Http\Controllers\CommonController::class, 'choosepayment'])->name('choosepayment.home');
Route::get('addphoto', [App\Http\Controllers\CommonController::class, 'addphoto'])->name('addphoto.home');
Route::get('additionalcontact', [App\Http\Controllers\CommonController::class, 'additionalcontact'])->name('additionalcontact.home');
Route::get('edit-timings', [App\Http\Controllers\CommonController::class, 'edittimings'])->name('edittimings.home');
Route::get('add-socila-links', [App\Http\Controllers\CommonController::class, 'addSocialLinks'])->name('addsociallinks.home');
Route::post('/check-mobile-exists', [BusinessController::class, 'checkMobileExists'])->name('check.mobile.exists');


Route::get('/user_dashboard', [App\Http\Controllers\CommonController::class, 'user_dashboard'])->name('user_dashboard');
Route::post('/add_role_request', [App\Http\Controllers\CommonController::class, 'add_role_request'])->name('add_role_request');
Route::post('/cancel_role_request_user', [App\Http\Controllers\CommonController::class, 'cancel_role_request_user'])->name('cancel_role_request_user');
Route::get('/sales_activity/{master_role_id}', [App\Http\Controllers\CommonController::class, 'sales_activity'])->name('sales_activity');
Route::get('/agent_activity/{master_role_id}', [App\Http\Controllers\CommonController::class, 'agent_activity'])->name('agent_activity');
Route::get('/seller_activity/{master_role_id}', [App\Http\Controllers\CommonController::class, 'seller_activity'])->name('seller_activity');

Route::get('seller-details', [App\Http\Controllers\CommonController::class, 'sellerdetails'])->name('sellerdetails.home');

Route::get('/raitan_admin/implements', [App\Http\Controllers\Horse_power_implementsController::class, 'indeximpls'])->name('implements');
Route::post('/raitan_admin/implements/add', [App\Http\Controllers\Horse_power_implementsController::class, 'implementsAdd'])->name('implements.add');
Route::get('/raitan_admin/implements/add', [App\Http\Controllers\Horse_power_implementsController::class, 'implementsAddview'])->name('implements.addview');
Route::post('/raitan_admin/implements/update', [App\Http\Controllers\Horse_power_implementsController::class, 'implementUpdate'])->name('implements.update');
Route::get('/raitan_admin/implements/update', [App\Http\Controllers\Horse_power_implementsController::class, 'implementedit'])->name('implements.edit');

Route::get('implementsdetails', [App\Http\Controllers\CommonController::class, 'implementsdetails'])->name('implementsdetails.home');
//Route::get('implements-details/{imp_id}/{machine_id}', [App\Http\Controllers\CommonController::class, 'implementsdetails'])->name('implementsdetails.home');

// Route::get('tractors/home', [App\Http\Controllers\TractorsController::class, 'indeximpls'])->name('tractors.home');
// Route::get('tractors/home', [App\Http\Controllers\TractorsController::class, 'implementsAddview'])->name('tractors.home');



