<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Roles;
use App\Models\Machines;
use App\Models\Implementors;
use App\Models\Horse_power_implements;
use App\Models\Services;

class TractorsController extends Controller
{
    public function index()

    {
        $horse_power_implements=Horse_power_implements::select('horse_power_implements.*', 'machines.name as machine_name')
        ->leftJoin('machines','machines.id','=','horse_power_implements.machine_id')
        ->where('horse_power_implements.status', 1)->get();
$machines=Machines::select('*')->get();
// return view('tractors.home', compact('machines', 'impls'));

        $services = Services::select('*')->where('status', '=', 1)->get();
        return view('tractors.home', compact('services','machines', 'horse_power_implements'));        
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
