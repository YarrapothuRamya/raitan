<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        $roles = Roles::select('name','role_id')->whereIn('role_id', [2,3,4])->where('status',1)->get();
        return view('auth.admin_register', compact('roles'));
    }
 
    public function register(Request $request)
    {
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
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'role' => intval($request->role_id),
        ]);
 
        return redirect('/admin_register')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }
     
    public function login(Request $request)
    {
        $request->validate([
            //'name' => 'required',
            'mobile' => 'required|digits:10',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('mobile', 'password');
     
        if (Auth::attempt($credentials)) {
            $role = \Auth::user()->role;
            //dd($role);
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
                    return redirect()->intended('/admin_login');
                    return '/login'; 
                break;
            }
            return redirect()->intended('/');
        }
     
        return redirect('/admin_login')->with('error', 'Invalid credentials. Please try again.');
    }
}
