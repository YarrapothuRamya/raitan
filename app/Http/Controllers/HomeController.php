<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function masterHome()
    {
        $role = \Auth::user()->role;
        if($role == 1){
            return view('master.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function adminHome()
    {
        $role = \Auth::user()->role;
        if($role == 2){
            return view('admin.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function staffHome()
    {
        $role = \Auth::user()->role;
        if($role == 3){
            return view('staff.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function customercareHome()
    {
        $role = \Auth::user()->role;
        if($role == 4){
            return view('customercare.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function salesHome()
    {
        $role = \Auth::user()->role;
        if($role == 5){
            return view('sales.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function agentsHome()
    {
        $role = \Auth::user()->role;
        if($role == 6){
            return view('agents.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function sellersHome()
    {
        $role = \Auth::user()->role;
        if($role == 7){
            return view('sellers.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }

    public function customersHome()
    {
        $role = \Auth::user()->role;
        if($role == 8){
            return view('customers.home');
        }else{
            return redirect()->back()->with('error','You have no access to this page'); 
        }
        
    }
}
