<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'mobile';
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password', 'role');
        //$credentials['role'] = $request->role;

        return $credentials;
    }

    public function logout()
    {
        $role = Auth::user()->role;
        Auth::logout();
        if($role == 1 || $role == 2 || $role == 3 || $role == 4){
            return redirect('raitan_signin');
        }else{
            return redirect('/');
        }
        
    }

    public function redirectTo() {
        $role = \Auth::user()->role; 
        switch ($role) {
            /*case '1':
                //return redirect()->intended('/master-home');
                return '/master-home';
                break;
            case '2':
                //return redirect()->intended('/admin-home');
                return '/admin-home';
                break;
            case '3':
                //return redirect()->intended('/staff-home');
                return '/staff-home';
                break;
            case '4':
                //return redirect()->intended('/sales-home');
                return '/customercare-home';
                break;*/
            case '5':
                //return redirect()->intended('/agents-home');
                return '/sales-home';
                break;
            case '6':
                //return redirect()->intended('/sellers-home');
                return '/agents-home';
                break;
            case '7':
                //return redirect()->intended('/customers-home');
                return '/sellers-home';
                break; 
            case '8':
                //return redirect()->intended('/customers-home');
                return '/customers-home';
                break; 

            default:
                return redirect()->intended('/admin_login');
                return '/login'; 
            break;
        }
    }
}
