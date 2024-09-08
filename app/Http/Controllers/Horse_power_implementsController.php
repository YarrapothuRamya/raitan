<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;  
use App\Models\Roles;
use App\Models\Machines;
use App\Models\Implementors;
use App\Models\Horse_power_implements;
use App\Models\Services;

class Horse_power_implementsController extends Controller
{
    public function indeximpls(){
      
        $horse_power_implements=Horse_power_implements::select('horse_power_implements.*', 'machines.name as machine_name')
        ->leftJoin('machines','machines.id','=','horse_power_implements.machine_id')->get();
$machines=Machines::select('*')->get();

return view('admin.implements.home', compact('machines', 'horse_power_implements'));
    
       
}
        public function implementsAddview(){
                $machines=Machines::select('*')->get();
            
                return view('admin.implements.add', compact('machines'));
                   
        }

        public function implementsAdd(Request $request){
                $validated = $request->validate([
                        'name' => 'required|unique:horse_power_implements',
                        'add_machine_id' => 'required',
                        'addimage' => 'required',
                        'description' => 'required',
                        'description_image' => 'required',
                        'addstatus' => 'required',

                    ]);

                    //$user_id = \Auth::user()->id;
                    $user_id = 1;
                    $horse_power_implements = new Horse_power_implements;
                    $horse_power_implements->machine_id = $request['add_machine_id'];
                    $horse_power_implements->user_id = $user_id;
                    $horse_power_implements->name = $request['name'];
                    $horse_power_implements->description = $request['description'];
                    
                    $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('implement_images'), $fileName);

                $horse_power_implements->image = $fileName;

                $image1 = $request->file('description_image');
                $fileName1 = rand() . "." . $request->file('description_image')->getClientOriginalExtension();
                $request->file('description_image')->move(public_path('implement_images'), $fileName1);

                $horse_power_implements->description_image = $fileName1;
                
                $horse_power_implements->status = $request['addstatus'];
               
                if($horse_power_implements->save()){
                   
                    return redirect()->back()->with('status','Implement Successfully Inserted');
                }else{
                  
                    return redirect()->back()->with('error','Something went wrong please try again.');
                }
        

        }
        public function implementedit(Request $request){
            $impleId = $request->query('imp_id');
            $horse_power_implements = Horse_power_implements::find($impleId);
        
        $machines=Machines::select('*')->get();
        
        return view('admin.implements.edit', compact('machines', 'horse_power_implements'));
        }
           

        public function implementUpdate(Request $request){
            $validated = $request->validate([
                'name' => 'required|unique:horse_power_implements,name,'.$request['id'],
                'machine_id' => 'required',
                'status' => 'required',
            ]);
            $horse_power_implements = Horse_power_implements::find($request['id']);
            $horse_power_implements->name = $request['name'];
            $horse_power_implements->machine_id = $request['machine_id'];
            $horse_power_implements->description = $request['description'];
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('implement_images').'/'.$horse_power_implements->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('implement_images'), $fileName);
                    $horse_power_implements->image = $fileName;
                }
                if ($request->file('description_image') != '' || $request->file('description_image') != NULL) {
                    if ($horse_power_implements->description_image) {
                        // Define the path of the old image
                        $file_path_1 = public_path('implement_images').'/'.$horse_power_implements->description_image;
                        if (file_exists($file_path_1)) {
                           // echo $file_path_1;exit;
                            unlink($file_path_1);
                        }
                    }
                   
                    $desfileName = rand() . "." . $request->file('description_image')->getClientOriginalExtension();
                    $request->file('description_image')->move(public_path('implement_images'), $desfileName);
                    $horse_power_implements->description_image = $desfileName;
                }
            //     $image1 = $request->file('description_image');
            //     print_r($image1);exit;
            //     $fileName1 = rand() . "." . $request->file('description_image')->getClientOriginalExtension();
            //     $request->file('description_image')->move(public_path('implement_images'), $fileName1);

            //    $horse_power_implements->description_image = $fileName1;
            $horse_power_implements->status = $request['status'];
             
            if($horse_power_implements->save()){
               
                return redirect()->back()->with('status','Implement Successfully Updated');
            }else{
                return redirect()->back()->with('error','Something went wrong please try again.');
            }

        }
}
