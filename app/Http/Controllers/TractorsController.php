<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Roles;
use App\Models\Machines;
use App\Models\Implementors;
use App\Models\Impls;
use App\Models\Services;

class TractorsController extends Controller
{
    public function index()

    {
        $impls=Impls::select('Impls.*', 'Machines.name as machine_name')
        ->leftJoin('Machines','Machines.id','=','Impls.machine_id')->get();
$machines=Machines::select('*')->get();
// return view('tractors.home', compact('machines', 'impls'));

        $services = Services::select('*')->where('status', '=', 1)->get();
        return view('tractors.home', compact('services','machines', 'impls'));        
    }

//     public function indeximpls(){
      
//         $impls=Impls::select('Impls.*', 'Machines.name as machine_name')
//         ->leftJoin('Machines','Machines.id','=','Impls.machine_id')->get();
// $machines=Machines::select('*')->get();

// return view('tractors.home', compact('machines', 'impls'));
    
       
// }
//         public function implementsAddview(){
//                 $machines=Machines::select('*')->get();
            
//                 return view('tractors.home', compact('machines'));
                   
//         }
     

}
