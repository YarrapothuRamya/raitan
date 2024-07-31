<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;  
use App\Models\Roles;
use App\Models\Machines;
use App\Models\Implementors;
use App\Models\Impls;
use App\Models\Services;

class ImplsController extends Controller
{
    public function indeximpls(){
      
        $impls=Impls::select('Impls.*', 'Machines.name as machine_name')
        ->leftJoin('Machines','Machines.id','=','Impls.machine_id')->get();
$machines=Machines::select('*')->get();

return view('admin.implements.home', compact('machines', 'impls'));
    
       
}
        public function implementsAddview(){
                $machines=Machines::select('*')->get();
            
                return view('admin.implements.add', compact('machines'));
                   
        }

        public function implementsAdd(Request $request){
                $validated = $request->validate([
                        'name' => 'required|unique:impls',
                        'add_machine_id' => 'required',
                        'addimage' => 'required',
                        'addstatus' => 'required',
                    ]);

                    $user_id = \Auth::user()->id;
                    $impls = new Impls;
                    $impls->machine_id = $request['add_machine_id'];
                    $impls->user_id = $user_id;
                    $impls->name = $request['name'];

                    $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('implement_images'), $fileName);

                $impls->image = $fileName;
                
                $impls->status = $request['addstatus'];
               
                if($impls->save()){
                   
                    return redirect()->back()->with('status','implement successfully updated');
                }else{
                  
                    return redirect()->back()->with('error','Something went wrong please try again.');
                }
        

        }
        public function implementedit(Request $request){
            $impleId = $request->query('imp_id');
            $impls = Impls::find($impleId);
        
        $machines=Machines::select('*')->get();
        
        return view('admin.implements.edit', compact('machines', 'impls'));
        }
           

        public function implementUpdate(Request $request){
            $validated = $request->validate([
                'name' => 'required|unique:impls,name,'.$request['id'],
                'machine_id' => 'required',
                'status' => 'required',
            ]);
            $impls = Impls::find($request['id']);
            $impls->name = $request['name'];
            $impls->machine_id = $request['machine_id'];
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('implement_images').'/'.$impls->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('implement_images'), $fileName);
                    $impls->image = $fileName;
                }
                
            $impls->status = $request['status'];
             
            if($impls->save()){
               
                return redirect()->back()->with('status','Role successfully updated');
            }else{
                return redirect()->back()->with('error','Something went wrong please try again.');
            }

        }
}
