<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //dd($data['role_id']);
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role_id'],
        ]);*/
        $pass_code = random_int(100000, 999999);
        $id = User::insertGetId([
            'name' => $data['name'],
            'email' => $data['email'],
            'pass_code' => $pass_code,
            'password' => Hash::make($data['password']),
            'role' => $data['role_id'],
        ]);

        $confirmation_link = env('APP_URL').'/verify-email/'.$pass_code.'/'.$id;

        Mail::to("balajivallabhapuram07@gmail.com")->send(new RegistrationMail(['confirmation_link' => $confirmation_link, 'pass_code' => $pass_code, 'id' => $id]));
        return view('auth.registerthankyou',compact('pass_code', 'id'));

    }

    public function showRegistrationForm()
    {
        $roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->where('status',1)->get();
        return view('auth.register',compact('roles'));
    }

    public function verifyEmail(Request $request)
    {
        $pass_code = $request['pass_code'];
        $user = Users::find($request($id));

        if($pass_code == $user->pass_code){
            return redirect('/home')->with('status', 'Successfully registered.');
        }else{
            return redirect('/home')->with('error', 'Something went wrong. Please try again.');
        }

        
    }
}
