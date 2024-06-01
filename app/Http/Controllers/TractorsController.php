<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Roles;
use App\Models\Services;

class TractorsController extends Controller
{
    public function index()
    {
        $services = Services::select('*')->where('status', '=', 1)->get();
        return view('tractors.home', compact('services'));
        
    }

}
