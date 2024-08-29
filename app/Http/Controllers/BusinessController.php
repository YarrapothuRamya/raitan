<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Services;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Business_contact;
use App\Models\Implementors;
use App\Models\Agriculture_Labour;
use App\Models\RepairsAndServices;
use App\Models\Sprayers;
use App\Models\Request_role;
use App\Models\User_Login_Logs;
use App\Models\Common_logs;

class BusinessController extends Controller
{
    // public function businessContactviwe()
    // {
    //     return view('business.addcontact');
    // }

    public function businessContact(Request $request)
    {
        $validated = $request->validate([
            'mobile' => 'required',
           
        ]);
        $mobileno=$request->input('mobile');
        $services = Services::select('*')->where('status', '=', 1)->get();
        //$businessContact = Business_contact::where('mobile', $validated['mobile'])->first();
        //echo $mobileno;die;
        $exists = Business_contact::where('mobile', $validated['mobile'])->exists();

        // if ($exists) {
            $credentials = $request->only('mobile');

        // Attempt to authenticate using the 'customer' guard
        $user_login = Auth::guard('customer')->getProvider()->retrieveByCredentials(['mobile' => $validated['mobile']]);

        // Check if user exists
        if ($user_login) {
            // Log the user in
            Auth::guard('customer')->login($user_login);
    
            // Access the authenticated user
            $user = Auth::guard('customer')->user();
    
            // Redirect to a different page or handle the user after login
            return view('business.address', compact('user'));
        } else {
            // Handle case where the user is not found
            return redirect()->route('addcontact.home1')
            ->with('mobileno', $mobileno);;
        }
        
            // Now you can access the authenticated user
            
        
            // Redirect back with an error message
           // return redirect()->back()->withErrors(['mobile' => 'Mobile number already registered. Please log in.']);
        //    return redirect()->route('addcontact.home')
        //    ->with('services', $services)
        //    ->with('mobileno', $mobileno);
        // }else {
    
        //     //$existingData=[];
           
        //     return redirect()->route('addcontact.home')
        //     ->with('services', $services)
        //     ->with('mobileno', $mobileno);
        //}
    }
    public function showForm(Request $request)
    {
        // Retrieve data needed for the form
        $services = $request->session()->get('services');
        $mobileno = $request->session()->get('mobileno');

        return view('business.addcontact', compact('services', 'mobileno'));
    }
    public function business_Contact(Request $request){

        $validated = $request->validate([
            'contactPerson' => 'required|string|max:255',
            'mobileNumber' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        
        //echo "hello world"; die;
        
        try {

            // Customer::create([
            //     'name' => $validated['contactPerson'],
            //     'mobile' =>$validated['mobileNumber'],
            //     'email' => $validated['email'],
            //     'password' => Hash::make($validated['password']),
            //     'status' => 1,
            // ]);
           
                // Create new record
                $businessContact = new Customer;
                // $businessContact->title = $validated['title'];
                $businessContact->name = $validated['contactPerson'];
                $businessContact->mobile = $validated['mobileNumber'];
                $businessContact->email = $validated['email'];
                $businessContact->password = Hash::make($validated['password']);
                $businessContact->status = 1;
        
                if ($businessContact->save()) {
                    $lastInsertedId = $businessContact->id;
                    return view('business.address', compact('lastInsertedId'));
                }
            
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error saving business contact: '.$e->getMessage());
        
            // Optionally, return an error response
            return redirect()->back()->withErrors(['error' => 'Failed to save contact details. Please try again later.']);
        }
        
  
        // Get the last inserted ID
        

        // Optionally, you can use this ID to redirect or pass it to another method
      
    }
}