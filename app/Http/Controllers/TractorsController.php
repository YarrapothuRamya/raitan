<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Roles;

class TractorsController extends Controller
{
    public function index()
    {
            return view('tractors.home');
        
    }

}
