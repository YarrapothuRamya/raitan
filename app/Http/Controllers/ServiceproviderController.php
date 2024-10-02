<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class ServiceproviderController extends Controller
{
   public function index(){
    $customer = Customer::all();
    return view('master.service_providers.home', compact('customer'));
   }
   public function view(){
echo $id;
   }
}
