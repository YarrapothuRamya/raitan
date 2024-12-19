<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machines;
class ProductController extends Controller
{
    public function add(Request $request){
 $user_id = $request->user_id;
$business_id = $request->business_id;
 $category = $request->category;
 $machine = Machines::all();
        return view('products.add', compact('user_id', 'business_id','category','machine'));
    }
    public function index(){
        return view('products.index');
    }
}
