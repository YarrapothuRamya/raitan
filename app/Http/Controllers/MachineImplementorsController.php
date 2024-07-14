<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Roles;
use App\Models\Machines;
use App\Models\Implementors;

class MachineImplementorsController extends Controller
{
    public function indexmachine()
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            
            $machines=Machines::select('*')->get();
            
            
            return view('admin.machines.home', compact('machines'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }

    public function indeximplementors()
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            
            $implementors=Implementors::select('Implementors.*', 'Machines.name as machine_name')
                      ->leftJoin('Machines','Machines.id','=','Implementors.machine_id')->get();
            $machines=Machines::select('*')->get();
            
            return view('admin.implementors.home', compact('machines', 'implementors'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
        public function machineAddview(){
            return view('admin.machines.add');
            }   
            public function machineedit(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            $mecaId = $request->query('mech_id');
            //dd("Hello");
            $machines = Machines::find($mecaId);

            //$machines=Machines::select('*')->get();
            
            
            return view('admin.machines.edit', compact('machines'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
    public function machineUpdate(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:machines,name,'.$request['id'],
                //'image' => 'required',
                'horse_power' => 'required',
                'status' => 'required',
            ]);
            $machine = Machines::find($request['id']);
            //dd($role);
            //$role->name = $request['name'];
            //$role->parent_id = $request['parent_id'];
            //$role->status = $request['status'];
            $machine->name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('machine_images').'/'.$machine->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('machine_images'), $fileName);
                    $machine->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            $machine->horse_power = $request['horse_power'];
            $machine->status = $request['status'];
             
            if($machine->save()){
                if($request['status'] != $request['status1']){
                    Implementors::where('machine_id', '=', $request['id'])->update(['status' => $request['status']]);
                }
               // return response()->json(['status' => 200, 'success' => 'Machine successfully updated']);
                return redirect()->back()->with('status','Role successfully updated');
            }else{
                return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('roles.home', compact('roles'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
            public function implementorAddview(){
                // $implementors=Implementors::select('Implementors.*', 'Machines.name as machine_name')
                //       ->leftJoin('Machines','Machines.id','=','Implementors.machine_id')->get();
            $machines=Machines::select('*')->get();
            
            return view('admin.implementors.add', compact('machines'));
            }
    public function machineAdd(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:machines',
                'addimage' => 'required',
                'addhorsepower' => 'required',
                'addstatus' => 'required',
            ]);

            //$maxrole = Roles::max('role_id');
            //dd($role);
            $user_id = \Auth::user()->id;
            $machine = new Machines;
            $machine->user_id = $user_id;
            $machine->name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('machine_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $machine->image = $fileName;
            $machine->horse_power = $request['addhorsepower'];
            $machine->status = $request['addstatus'];
            //dd("Hello");
            if($machine->save()){
               // return response()->json(['status' => 200, 'success' => 'Machine successfully created']);
                return redirect()->back()->with('status','Machine successfully created');
            }else{
                return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('machines.home', compact('machines'));
        //}else{
            //return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }

    public function implementorUpdate(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:implementors,name,'.$request['id'],
                'machine_id' => 'required',
                //'image' => 'required',
                //'horse_power' => 'required',
                'status' => 'required',
            ]);
            $implementor = Implementors::find($request['id']);
            //dd($role);
            //$role->name = $request['name'];
            //$role->parent_id = $request['parent_id'];
            //$role->status = $request['status'];
            $implementor->name = $request['name'];
            $implementor->machine_id = $request['machine_id'];
            //$implementor->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('implementor_images').'/'.$implementor->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('implementor_images'), $fileName);
                    $implementor->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            //$implementor->horse_power = $request['horse_power'];
            $implementor->status = $request['status'];
             
            if($implementor->save()){
               // return response()->json(['status' => 200, 'success' => 'Implementor successfully updated']);
                return redirect()->back()->with('status','Role successfully updated');
            }else{
                //return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('roles.home', compact('roles'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
public function implementoredit(Request $request){
    //$imple=Implementors::select('*')->get();
    $impleId = $request->query('imp_id');
    $implementors = Implementors::find($impleId);

    // $implementors = Implementors::select('Implementors.*', 'Machines.name as machine_name')
    // ->leftJoin('Machines', 'Machines.id', '=', 'Implementors.machine_id')
    // ->when($impleId, function ($query, $impleId) {
    //     return $query->where('Implementors.id', $impleId);
    // })
    // ->get();
$machines=Machines::select('*')->get();

return view('admin.implementors.edit', compact('machines', 'implementors'));
}
    public function implementorAdd(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:implementors',
                'add_machine_id' => 'required',
                'addimage' => 'required',
                'addstatus' => 'required',
            ]);

            //$maxrole = Roles::max('role_id');
            //dd($role);
            $user_id = \Auth::user()->id;
            $implementor = new Implementors;
            $implementor->machine_id = $request['add_machine_id'];
            $implementor->user_id = $user_id;
            $implementor->name = $request['name'];
            //$implementor->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('implementor_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $implementor->image = $fileName;
            //$implementor->horse_power = $request['addhorsepower'];
            $implementor->status = $request['addstatus'];
            //dd("Hello");
            if($implementor->save()){
                return response()->json(['status' => 200, 'success' => 'Implementor successfully created']);
                return redirect()->back()->with('status','implementor successfully updated');
            }else{
                return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('implementors.home', compact('implementors'));
        //}else{
            //return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
}
