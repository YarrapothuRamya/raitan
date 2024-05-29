<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function indexroot()
    {
        return view('welcome');
    }

    public function pagenotfound()
    {
        return view('pages.pagenotfound');
    }
}
