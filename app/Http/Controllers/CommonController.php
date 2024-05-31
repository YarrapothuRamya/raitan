<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function indexroot()
    {
        return view('welcome');
    }

    public function productdetails()
    {
        return view('productdetails.home');
    }


    public function services()
    {
        return view('services.service');
    }

    public function contactus()
    {
        return view('contactus.contactus');
    }


    public function pagenotfound()
    {
        return view('pages.pagenotfound');
    }
}
