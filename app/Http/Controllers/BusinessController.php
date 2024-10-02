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
// app/Http/Controllers/YourControllerName.php



    public function businessContact(Request $request)
    {
        $validated = $request->validate([
            'mobile' => 'required',
           
        ]);
        $mobileno=$request->input('mobile');
       // $services = Services::select('*')->where('status', '=', 1)->get();
        //$businessContact = Business_contact::where('mobile', $validated['mobile'])->first();
        //echo $mobileno;die;
        //$exists = Business_contact::where('mobile', $validated['mobile'])->exists();

        // if ($exists) {
            $credentials = $request->only('mobile');

        // Attempt to authenticate using the 'customer' guard
        $user_login = Customer::where('mobile', $mobileno)->first();

        // Check if user exists
        if ($user_login) {
            // Log the user in
           
            //$user_id=Auth::guard('customer')->user()->id;
            // Redirect to a different page or handle the user after login
            //return view('business.address', compact('user'));
            return redirect()->route('listing.home')->with('mobile', $mobileno);
        } else {
            // Handle case where the user is not found
            return redirect()->route('addcontact.home1')
            ->with('mobileno', $mobileno);
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
    public function business_Contact_register(Request $request){

        $validated = $request->validate([
            'contactPerson' => 'required|string|max:255',
            'mobileNumber' => 'required|string|max:15',
            'email' => 'nullable',
            'password' => 'required',
        ]);
        
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
                $businessContact->name = $validated['contactPerson'];
                $businessContact->mobile = $validated['mobileNumber'];
                $businessContact->email = $validated['email'];
                $businessContact->password = Hash::make($validated['password']);
                $businessContact->status = 1;
        
                if ($businessContact->save()) {
                    $credentials = [
                        'mobile' => $businessContact->mobile,
                        'password' => $validated['password'], // Use the plain password for authentication
                    ];
                    if (Auth::guard('customer')->attempt($credentials)) {
                        // Authentication passed
                        $user_id = Auth::guard('customer')->user()->id;
                        return redirect()->route('address.home')->with('user_id', $user_id);
                    } else {
                        return redirect()->route('business.addcontact')->with('error', 'Authentication failed. Please try again.');
                    }
                    // $lastInsertedId = $businessContact->id;
                    // return redirect()->route('address.home')->with('user_id', $lastInsertedId);
                }
            
        } catch (\Exception $e) {
            \Log::error('Error saving business contact: '.$e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to save contact details. Please try again later.']);
        } 
    }
     public function businessAddressAdd(Request $request){
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'pincode' => 'required|string|max:7',
            'block_no' => 'required',
            'street'=>'required',
            'area' => 'required',
            'landmark' => 'required',
            'city' => 'required',
            'state' => 'required',
            'user_id' => 'required',
            'email' => 'nullable',

        ]);
        // $userid =  $request->input('user_id');
        // if($userid){
        //     $userid =  $request->input('user_id');  
        // }
        // else{
        //     $userid =  Auth::guard('customer')->user()->id;  
        // }
        // exit;
        $validated['status'] = 1;
        $businessAddress = new Business_contact;
        $businessAddress->business_name= $validated['business_name'];
        $businessAddress->mobile= $validated['mobile'];
        $businessAddress->pincode= $validated['pincode'];
        $businessAddress->block_no= $validated['block_no'];
        $businessAddress->street= $validated['street'];
        $businessAddress->area= $validated['area'];
        $businessAddress->email = $validated['email'];
        $businessAddress->landmark= $validated['landmark'];

        $businessAddress->city= $validated['city'];
        $businessAddress->user_id= $validated['user_id'];
        $businessAddress->status= $validated['status'];
        $businessAddress->business_add_status= "Pending";


// echo $address_Id = $validated['user_id'];
// exit;
        if ($businessAddress->save()) {
            // $business_id = $businessAddress->id;
            $business_id= $businessAddress->id;
            if($business_id){
                return redirect()->route('timings.home', $business_id);
            }
            else{
                return redirect()->route('timings.home');  
            }
            // Redirect to another page, for example, to the 'businessAddressList' route
             
            //return redirect()->route('timings.home');
        }
    
        // If insertion failed, redirect back with an error message
        return redirect()->back()->with('error', 'Failed to add business address.');
     }
     public function login(Request $request){
        $request->validate([
            'mobile' => 'required|digits:10',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('mobile', 'password');
//print_r($credentials);exit();
        // Attempt to authenticate using the 'customer' guard
        Auth::guard('customer')->attempt($credentials);
        $user_id=Auth::guard('customer')->user()->id;
        //echo $user_id;die;
            // Redirect to a different page or handle the user after login
            //return view('business.address', compact('user'));
            return redirect()->route('address.home')->with('user_id', $user_id);
     }
     public function Timings(Request $request){
        //echo "hello";exit;
        $request->validate([
             'id' => 'nullable',
            'days' => 'required|array',
            'opentime' => 'required|string',
            'closetime' => 'required|string',
        ]);
        // echo $request->input('id');
        // echo json_encode($request->input('days'));
        // exit;
           // print_r($request->input());exit;
        // Retrieve the business contact or create a new one
         $businessContact = Business_contact::find($request->input('id')); // Adjust based on your unique identifier
        $businessContact->working_days = json_encode($request->input('days'));
        $businessContact->open_time = $request->input('opentime');
        $businessContact->close_time = $request->input('closetime');

        // Save the record category.home
        if($businessContact->save()){
           $business_id =  $businessContact->id;
        return redirect()->route('category.home', $business_id);
        }
     }
     public function businessCategoryadd(Request $request){
        $request->validate([
            'id' => 'nullable',
            'searchInput' => 'required|string|max:255',
        ]);
        //print_r($request->input());exit;
        // Retrieve the business category by ID
         $category = Business_contact::find($request->input('id'));
        $category->category = $request->input('searchInput');
        $category->registration_status = 'registered';
        // echo $request->input('id');

        if ($category->save()) {
$user_id =  $category->user_id;
  $business = Business_contact::where('user_id', $user_id)->get();
        // exit;
        return redirect()->route('mybusiness.home')->with('user_id',$user_id);
        } else {
            return back()->with('error', 'Failed to update the category.');
        }
     }
}