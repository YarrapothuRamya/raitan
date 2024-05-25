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
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = '/home';

    protected function redirectTo()
    {
        //if (\Auth::user()->role == 1) {
        //    return '/master-admin';
        //}
        return '/register-thankyou';
    }

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
            'mobile' => ['required', 'digits:10', 'unique:users'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'role_id' => ['required'],
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
        return User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            //'email' => $data['email'],
            'password' => Hash::make($data['password']),
            //'role' => $data['role_id'],
            'status' => $data['status'],
        ]);
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

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    public function showRegistrationForm()
    {
        $roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->where('status',1)->get();
        return view('auth.register',compact('roles'));
    }

    public function registerthankyou()
    {
        return response()->json(['status' => 'success', 'message' => 'Successfully Registered']);
        return view('auth.registerthankyou');
    }

    public function verifyEmail(Request $request)
    {
        $pass_code = $request['pass_code'];
        $user = User::find($request['id']);
        //dd($pass_code . " " . $user->pass_code);
        if($pass_code == $user->pass_code){
            if($user->email_verified_at == null){
                User::where('id', '=', $request['id'])->update(['email_verified_at' => Carbon::now()]);
                return redirect('/home')->with('status', 'Successfully registered.');
            }
            return redirect('/home')->with('status', 'You are already  registered.');
            
        }else{
            return redirect('/home')->with('error', 'Something went wrong. Please try again.');
        }

        
    }
}
