<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\User_Register_Logs;
use App\Models\User_Login_Logs;

class UserController extends Controller
{
    public function userregister(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'mobile' => 'required|digits:10|unique:users',
                'role_id' => 'required',
                'password' => 'required|confirmed|min:6',
            ],
                [
                    'role_id.required' => "The role is required."
                ]
            );

            //dd($request->role_id);
            $user = User::where("mobile", $request->mobile)->where(function ($query) {
                $query->where('role', 8)
                      ->orWhere('role', 7) // Example additional role condition
                      ->orWhere('role', 6)->orWhere('role', 5); // Example additional role condition
            })->get();
            $user_count = $user->count();
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
     
            User::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                //'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'role' => intval($request->role_id),
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
            $user = User::where("mobile", $request->mobile)->get();
            $user_count = $user->count();
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

    public function userlogin(Request $request)
    {
        try {
            $request->validate([
                //'name' => 'required',
                'mobile' => 'required|digits:10',
                'password' => 'required|min:6',
                'role' => 'required',
            ]);

            $credentials = $request->only('mobile', 'password', 'role');
         
            if (Auth::attempt($credentials)) {
                //dd("Logged in");
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");
                $clientIP = \Request::ip();
                User_Login_Logs::create([
                        'user_id' => Auth::user()->id,
                        'user_created_at' => Auth::user()->created_at,
                        'phone' => $request->mobile,
                        'description' => 'Successfully logged in',
                        'status' => 'Logged in',
                        'audit_time' => $currentDatetime,
                        'ipaddress' => $clientIP,
                    ]);
                return response()->json(['status' => 'success', 'message' => 'Successfully logged in!']);
            }else{
                //dd("Invalid credentials");
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");
                $user = User::where("mobile", $request->mobile)->get();
                $user_count = $user->count();
                $clientIP = \Request::ip();
                if($user_count > 0){
                    User_Login_Logs::create([
                        'user_id' => $user->id,
                        'phone' => $request->mobile,
                        'description' => 'Invalid Credentials',
                        'status' => 'error',
                        'audit_time' => $currentDatetime,
                        'ipaddress' => $clientIP,
                    ]);
                    return response()->json(['status' => 'error', 'message' => 'Invalid Credentials']);
                }else{
                    User_Login_Logs::create([
                        'user_id' => 0,
                        'phone' => $request->mobile,
                        'description' => 'No record found',
                        'status' => 'error',
                        'audit_time' => $currentDatetime,
                        'ipaddress' => $clientIP,
                    ]);
                    return response()->json(['status' => 'error', 'message' => 'No records found with this number, please register.']);
                }
                return response()->json(['status' => 'error', 'message' => 'Invalid Credentials!']);

                //$errors = ['Invalid credentials'];
                //return redirect()->back()->withErrors($errors);
            }
         
            //return redirect('/raitan_signin')->with('error', 'Invalid credentials. Please try again.');
            
        } catch (\Exception $e) {

            //dd("exce");
            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");
            $user = User::where("mobile", $request->mobile)->get();
            $user_count = $user->count();
            $clientIP = \Request::ip();
            if($user_count > 0){
                User_Login_Logs::create([
                    'user_id' => $user->id,
                    'phone' => $request->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'error',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }else{
                User_Login_Logs::create([
                    'user_id' => 0,
                    'phone' => $request->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'error',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
                return response()->json(['status' => 'error', 'message' => 'No records found with this number, please register.']);
            }
            
        }
        
    }
}
