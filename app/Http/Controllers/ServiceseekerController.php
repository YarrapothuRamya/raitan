<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Business_contact;

class ServiceseekerController extends Controller
{
    public function index() {
        $user = Customer::all();
        foreach($user as $users){
           $uer_id =  $users->id;
           $business =  Business_contact::where('user_id', $uer_id)->get();
         foreach($business as $busines){
             $busines_userid = $busines->user_id;
             if($uer_id == $busines_userid){
                     $users = Customer::where('id', '!=', $busines_userid)->get();
                // echo $busines_userid = $busines->user_id;
                return view('master.service-seeker.index', compact('users'));
             }
             else{
                return view('raitan_admin/service-seeker');
             }
            
         }
        }

    }
}
