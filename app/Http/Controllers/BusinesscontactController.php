<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_contact;
use App\Models\Customer;
class BusinesscontactController extends Controller
{
    public function index(){
        $businesscontact = Business_contact::all();
        return view('master.business_contact.index', compact('businesscontact'));
       }
}
