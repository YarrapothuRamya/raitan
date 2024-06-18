<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Roles;
use App\Models\Request_role;
use App\Models\Admin_Login_Logs;
use App\Models\Admin_Register_Logs;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        $roles = Roles::select('name','role_id')->whereIn('role_id', [2,3,4])->where('status',1)->get();
        return view('auth.admin_register', compact('roles'));
    }
 
    public function register(Request $request)
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
     
            User::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'role' => intval($request->role_id),
            ]);

            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");

            Admin_Register_Logs::create([
                'phone' => $request->mobile,
                'description' => 'Registered Successfully',
                'status' => 'registered',
                'audit_time' => $currentDatetime,
            ]);
     
            return redirect('/admin_register')->with('success', 'Registered successfully!');
        } catch (\Exception $e) {
            $user = User::where("mobile", $request->mobile)->get();
            $user_count = $user->count();
            if($user_count > 0){
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");

                Admin_Register_Logs::create([
                    'phone' => $request->mobile,
                    'description' => 'Already Registered',
                    'status' => 'already registered',
                    'audit_time' => $currentDatetime,
                ]);
         
                return redirect('/admin_register')->with('error', 'Account already Registered with this number!');
                
            }


            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");

            Admin_Register_Logs::create([
                'phone' => $request->mobile,
                'description' => $e->getMessage(),
                'status' => 'error',
                'audit_time' => $currentDatetime,
            ]);
            return redirect('/admin_register')->with('error', $e->getMessage());
        }
        
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function approve_permissions()
    {
        //$user_id = \Auth::user()->id;
        //$roles = Roles::select("roles.id as role_master_id","roles.name as role_master_name","roles.role_id as role_master_role_id","roles.status as role_master_status","request_roles.user_id as request_roles_user_id","request_roles.role_id as request_roles_role_id","request_roles.role_permission_status as request_roles_permission_status")->leftJoin("request_roles", "request_roles.role_id", "=","roles.role_id")->whereNotIn('roles.role_id', [1,2,3,4])->where('roles.status', 1)->where('request_roles.user_id', $user_id)->orderBy("roles.role_id")->get();
        //dd($roles);
        //$user_id = \Auth::user()->id;
        
        $request_roles = Request_role::select("users.id as user_id", "users.name as user_name", "roles.role_id as role_id", "roles.name as role_name", "request_roles.role_permission_status as role_permission_status")->leftJoin("roles", "roles.role_id", "request_roles.role_id")->leftJoin("users", "users.id", "request_roles.user_id")->get();

        //dd($request_roles);

        return view('master.approvals', compact('request_roles'));
    }

    public function reject_permissions_users(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'user_id' => 'required',
                'role_id' => 'required',
                'role_permission_status' => 'required',
            ]);

            //$user_id = \Auth::user()->id;
            $request_roles = Request_role::where('user_id', '=', $request['user_id'])->
                                           where('role_id', '=', $request['role_id'])->first();
            //$request_roles->user_id = $user_id;
            //$request_roles->role_id = $request['role_master_role_id'];
            $request_roles->role_permission_status = $request['role_permission_status'];
            if($request_roles->save()){
                $data = [
                  'success' => true,
                  'message'=> 'Request successfully cancelled.'
                ] ;
                return response()->json($data);

                return redirect()->back()->with('status', 'Permission successfully requested.');
                return redirect()->back()->with('status','machine successfully updated');
            }else{
                $data = [
                  'error' => true,
                  'message'=> 'Something went wrong please try again.'
                ] ;
                return response()->json($data);
                return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('machines.home', compact('machines'));
        //}else{
            //return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }

    public function approve_permissions_users(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'user_id' => 'required',
                'role_id' => 'required',
                'role_permission_status' => 'required',
            ]);

            //$user_id = \Auth::user()->id;
            $request_roles = Request_role::where('user_id', '=', $request['user_id'])->
                                           where('role_id', '=', $request['role_id'])->first();
            //$request_roles->user_id = $user_id;
            //$request_roles->role_id = $request['role_master_role_id'];
            $request_roles->role_permission_status = $request['role_permission_status'];
            if($request_roles->save()){
                $data = [
                  'success' => true,
                  'message'=> 'Request successfully approved.'
                ] ;
                return response()->json($data);

                return redirect()->back()->with('status', 'Permission successfully requested.');
                return redirect()->back()->with('status','machine successfully updated');
            }else{
                $data = [
                  'error' => true,
                  'message'=> 'Something went wrong please try again.'
                ] ;
                return response()->json($data);
                return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('machines.home', compact('machines'));
        //}else{
            //return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
     
    public function login(Request $request)
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
                $role = \Auth::user()->role;
                //dd($role);
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");
                Admin_Login_Logs::create([
                    'user_id' => Auth::user()->id,
                    'phone' => $request->mobile,
                    'description' => 'Successfully logged in',
                    'status' => 'Logged in',
                    'audit_time' => $currentDatetime,
                ]);
                switch ($role) {
                    case '1':
                        return redirect()->intended('/master-home');
                        return '/master-home';
                        break;
                    case '2':
                        return redirect()->intended('/admin-home');
                        return '/admin-home';
                        break;
                    case '3':
                        return redirect()->intended('/staff-home');
                        return '/staff-home';
                        break;
                    case '4':
                        return redirect()->intended('/customercare-home');
                        return '/customercare-home';
                        break;
                    /*case '5':
                        return redirect()->intended('/sales-home');
                        return '/sales-home';
                        break;
                    case '6':
                        return redirect()->intended('/agents-home');
                        return '/agents-home';
                        break;
                    case '7':
                        return redirect()->intended('/sellers-home');
                        return '/sellers-home';
                        break; 
                    case '8':
                        return redirect()->intended('/customers-home');
                        return '/customers-home';
                        break; */

                    default:
                        return redirect()->intended('/raitan_signin');
                        return '/login'; 
                    break;
                }
                return redirect()->intended('/');
            }else{
                $curTime = new \DateTime();
                $currentDatetime = $curTime->format("Y-m-d H:i:s");
                $user = User::where("mobile", $request->mobile)->get();
                $user_count = $user->count();
                if($user_count > 0){
                    $user = User::where("mobile", $request->mobile)->first();
                    Admin_Login_Logs::create([
                        'user_id' => $user->id,
                        'phone' => $request->mobile,
                        'description' => 'Invalid Credentials',
                        'status' => 'error',
                        'audit_time' => $currentDatetime,
                    ]);
                    $errors = ['Invalid credentials'];
                    return redirect()->back()->withErrors($errors);
                }else{
                    Admin_Login_Logs::create([
                        'user_id' => 0,
                        'phone' => $request->mobile,
                        'description' => 'No record found',
                        'status' => 'error',
                        'audit_time' => $currentDatetime,
                    ]);
                    $errors = ['No records found with this number, please contact your master.'];
                    return redirect()->back()->withErrors($errors);
                }

                $errors = ['Invalid credentials'];
                return redirect()->back()->withErrors($errors);
            }
         
            return redirect('/raitan_signin')->with('error', 'Invalid credentials. Please try again.');
        } catch (\Exception $e) {
            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");
            $user = User::where("mobile", $request->mobile)->get();
            $user_count = $user->count();
            if($user_count > 0){
                $user = User::where("mobile", $request->mobile)->first();
                Admin_Login_Logs::create([
                    'user_id' => $user->id,
                    'phone' => $request->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'error',
                    'audit_time' => $currentDatetime,
                ]);
                $errors = [$e->getMessage()];
                return redirect()->back()->withErrors($errors);
            }else{
                Admin_Login_Logs::create([
                    'user_id' => 0,
                    'phone' => $request->mobile,
                    'description' => 'No record found',
                    'status' => 'error',
                    'audit_time' => $currentDatetime,
                ]);
                $errors = ['No records found with this number, please contact your master.'];
                return redirect()->back()->withErrors($errors);
            }
        }
        
    }

    
}
