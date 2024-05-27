<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function redirectTo() {
        $role = \Auth::user()->role; 
        switch ($role) {
            case '1':
                return '/master-home';
                break;
            case '2':
                return '/admin-home';
                break;
            case '3':
                return '/staff-home';
                break;
            case '4':
                return '/sales-home';
                break;
            case '5':
                return '/agents-home';
                break;
            case '6':
                return '/sellers-home';
                break;
            case '7':
                return '/customers-home';
                break; 

            default:
                return '/login'; 
            break;
      }
    }
}
