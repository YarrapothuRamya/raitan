<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use App\Models\User_Register_Logs;
use App\Models\User_Login_Logs;

class UserController extends Controller
{
    public function userregister(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'mobile' => 'required|digits:10|unique:customers',
                'password' => 'required|confirmed|min:6',
            ]
            );

            //dd($request->role_id);
            $user = Customer::where("mobile", $request->mobile)->get();
            $user_count = $user->count();
            //echo "User count";exit;
            $clientIP = \Request::ip();
            if($user_count > 0){
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");

                User_Register_Logs::create([
                    'phone' => $request->mobile,
                    'description' => 'Already Registered',
                    'status' => 'already registered',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
         
                return response()->json(['status' => 'success', 'message' => 'Account already Registered with this number. Please login!']);
            }
     
            Customer::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
                'status' => $request->status,
            ]);

            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");

            User_Register_Logs::create([
                'phone' => $request->mobile,
                'description' => 'Registered Successfully',
                'status' => 'registered',
                'audit_time' => $currentDatetime,
                'ipaddress' => $clientIP,
            ]);
     
            return response()->json(['status' => 'success', 'message' => 'Registered successfully!']);
        } catch (\Exception $e) {
            $user = Customer::where("mobile", $request->mobile)->get();
            $user_count = $user->count();
            //return response()->json(['status' => 'error', 'message' => $user_count]);
            $clientIP = \Request::ip();
            if($user_count > 0){
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");

                User_Register_Logs::create([
                    'phone' => $request->mobile,
                    'description' => 'Already Registered',
                    'status' => 'already registered',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
         
                return response()->json(['status' => 'error', 'message' => 'Account already Registered with this number. Please login!']);
            }


            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");

            User_Register_Logs::create([
                'phone' => $request->mobile,
                'description' => $e->getMessage(),
                'status' => 'error',
                'audit_time' => $currentDatetime,
                'ipaddress' => $clientIP,
            ]);
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            return $e->getMessage();
        }
    }

    // public function userlogin(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             //'name' => 'required',
    //             'mobile' => 'required|digits:10',
    //             'password' => 'required|min:6',
    //             'role' => 'required',
    //         ]);

    //         $credentials = $request->only('mobile', 'password', 'role');
         
    //         if (Auth::attempt($credentials)) {
    //             //dd("Logged in");
    //             $curTime = new \DateTime();
    //             $currentDatetime = $curTime->format("Y-m-d H:i:s");
    //             $clientIP = \Request::ip();
    //             User_Login_Logs::create([
    //                     'user_id' => Auth::user()->id,
    //                     'user_created_at' => Auth::user()->created_at,
    //                     'phone' => $request->mobile,
    //                     'description' => 'Successfully logged in',
    //                     'status' => 'Logged in',
    //                     'audit_time' => $currentDatetime,
    //                     'ipaddress' => $clientIP,
    //                 ]);
    //             return response()->json(['status' => 'success', 'message' => 'Successfully logged in!']);
    //         }else{
    //             //dd("Invalid credentials");
    //             $curTime = new \DateTime();
    //             $currentDatetime = $curTime->format("Y-m-d H:i:s");
    //             $user = User::where("mobile", $request->mobile)->get();
    //             $user_count = $user->count();
    //             $clientIP = \Request::ip();
    //             if($user_count > 0){
    //                 User_Login_Logs::create([
    //                     'user_id' => $user->id,
    //                     'phone' => $request->mobile,
    //                     'description' => 'Invalid Credentials',
    //                     'status' => 'error',
    //                     'audit_time' => $currentDatetime,
    //                     'ipaddress' => $clientIP,
    //                 ]);
    //                 return response()->json(['status' => 'error', 'message' => 'Invalid Credentials']);
    //             }else{
    //                 User_Login_Logs::create([
    //                     'user_id' => 0,
    //                     'phone' => $request->mobile,
    //                     'description' => 'No record found',
    //                     'status' => 'error',
    //                     'audit_time' => $currentDatetime,
    //                     'ipaddress' => $clientIP,
    //                 ]);
    //                 return response()->json(['status' => 'error', 'message' => 'No records found with this number, please register.']);
    //             }
    //             return response()->json(['status' => 'error', 'message' => 'Invalid Credentials!']);

    //             //$errors = ['Invalid credentials'];
    //             //return redirect()->back()->withErrors($errors);
    //         }
         
    //         //return redirect('/raitan_signin')->with('error', 'Invalid credentials. Please try again.');
            
    //     } catch (\Exception $e) {

    //         //dd("exce");
    //         $curTime = new \DateTime();
    //         $currentDatetime = $curTime->format("Y-m-d H:i:s");
    //         $user = User::where("mobile", $request->mobile)->get();
    //         $user_count = $user->count();
    //         $clientIP = \Request::ip();
    //         if($user_count > 0){
    //             User_Login_Logs::create([
    //                 'user_id' => $user->id,
    //                 'phone' => $request->mobile,
    //                 'description' => $e->getMessage(),
    //                 'status' => 'error',
    //                 'audit_time' => $currentDatetime,
    //                 'ipaddress' => $clientIP,
    //             ]);
    //             return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    //         }else{
    //             User_Login_Logs::create([
    //                 'user_id' => 0,
    //                 'phone' => $request->mobile,
    //                 'description' => $e->getMessage(),
    //                 'status' => 'error',
    //                 'audit_time' => $currentDatetime,
    //                 'ipaddress' => $clientIP,
    //             ]);
    //             return response()->json(['status' => 'error', 'message' => 'No records found with this number, please register.']);
    //         }
            
    //     }
        
    // }
    public function userlogin(Request $request)
{
    try {
        $request->validate([
            'mobile' => 'required|digits:10',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('mobile', 'password');

        // Attempt to authenticate using the 'customer' guard
        if (Auth::guard('customer')->attempt($credentials)) {
            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");
            $clientIP = $request->ip();
            $user = Auth::guard('customer')->user();

            // Log successful login
            User_Login_Logs::create([
                'user_id' => $user->id,
                'user_created_at' => $user->created_at,
                'phone' => $request->mobile,
                'description' => 'Successfully logged in',
                'status' => 'Logged in',
                'audit_time' => $currentDatetime,
                'ipaddress' => $clientIP,
            ]);
            //dd($request->session()->all());die();
            return response()->json(['status' => 'success', 'message' => 'Successfully logged in!']);
        } else {
            // Log invalid credentials
            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");
            $clientIP = $request->ip();
            $user = Customer::where('mobile', $request->mobile)->first();

            User_Login_Logs::create([
                'user_id' => $user ? $user->id : 0,
                'phone' => $request->mobile,
                'description' => $user ? 'Invalid Credentials' : 'No record found',
                'status' => 'error',
                'audit_time' => $currentDatetime,
                'ipaddress' => $clientIP,
            ]);

            $message = $user ? 'Invalid Credentials' : 'No records found with this number, please register.';
            return response()->json(['status' => 'error', 'message' => $message]);
        }

    } catch (\Exception $e) {
        $curTime = new \DateTime();
        $currentDatetime = $curTime->format("Y-m-d H:i:s");
        $clientIP = $request->ip();
        $user = Customer::where('mobile', $request->mobile)->first();

        // Log exception details
        User_Login_Logs::create([
            'user_id' => $user ? $user->id : 0,
            'phone' => $request->mobile,
            'description' => $e->getMessage(),
            'status' => 'error',
            'audit_time' => $currentDatetime,
            'ipaddress' => $clientIP,
        ]);

        $message = $user ? $e->getMessage() : 'No records found with this number, please register.';
        return response()->json(['status' => 'error', 'message' => $message]);
    }
}
public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();
        // $request->session()->put($dataToKeep);

        return redirect('/'); // Redirect to the desired location after logout
    }
    public function user_profile_update(Request $request)
    {
        
            $validated = $request->validate([
                'name' => 'required',
                //'image' => 'required',
                // 'email' => 'required',
                // 'dob' => 'required',
                
            ]);
            $customer = Customer::find($request['id']);
           
            $customer->name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('customer_images').'/'.$customer->image;
                    //echo $file_path;die;
                    if (!empty($customer->image) && file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('customer_images'), $fileName);
                    $customer->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            $customer->email = $request['email'];
            $customer->dob = $request['dob'];
            $customer->updated_at = now();
             
            if($customer->save()){
               
                return redirect()->back()->with('status','Your Profile successfully Edited');
            }else{
               // return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('roles.home', compact('roles'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
}
