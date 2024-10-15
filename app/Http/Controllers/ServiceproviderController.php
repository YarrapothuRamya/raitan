<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Business_contact;
use Illuminate\Http\Request;

class ServiceproviderController extends Controller
{
   public function index()
   {
         $business_contacts1 =Business_contact::select('user_id')->distinct()->get();
        
         return view('master.service_providers.home', compact('business_contacts1'));
       


   }
   public function view()
   {
      echo $id;
   }
}
