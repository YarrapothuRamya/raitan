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
        $role = \Auth::user()->role;
        if($role == 1){
            
            $machines=Machines::select('*')->get();
            
            
            return view('admin.machines.home', compact('machines'));
        }else{
            return redirect()->back()->with('error','You have no access to this page');
        }
        
    }

    public function machineUpdate(Request $request)
    {
        $role = \Auth::user()->role;
        if($role == 1){
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
                }
                $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('machine_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $machine->image = $fileName;
            $machine->horse_power = $request['horse_power'];
            $machine->status = $request['status'];
             
            if($machine->save()){
                return response()->json(['status' => 200, 'success' => 'Machine successfully updated']);
                return redirect()->back()->with('status','Role successfully updated');
            }else{
                return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('roles.home', compact('roles'));
        }else{
            return redirect()->back()->with('error','You have no access to this page');
        }
        
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
            $role = \Auth::user()->role;
            $machine = new Machines;
            $machine->user_id = $role;
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
                return response()->json(['status' => 200, 'success' => 'machine successfully created']);
                return redirect()->back()->with('status','machine successfully updated');
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
}
