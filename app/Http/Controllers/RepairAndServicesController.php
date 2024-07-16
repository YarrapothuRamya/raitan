<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\RepairsAndServices;

class RepairAndServicesController extends Controller
{
    public function index()
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            
            $repairsandservices = RepairsAndServices::select('*')->get();
            
            
            return view('master.repairsandservices.home', compact('repairsandservices'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
    public function repairaddview(){
        return view('master.repairsandservices.add');
    }
    public function repaireditview(Request $request){
        $reas_id = $request->query('reas_id');
        $ras = RepairsAndServices::find($reas_id);
        return view('master.repairsandservices.edit', compact('ras'));
    }
    public function repairsandservicesUpdate(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:repairs_and_services,name,'.$request['id'],
                //'image' => 'required',
                'description' => 'required',
                'status' => 'required',
            ]);
            $repairsandservices = RepairsAndServices::find($request['id']);
            //dd($role);
            //$role->name = $request['name'];
            //$role->parent_id = $request['parent_id'];
            //$role->status = $request['status'];
            $repairsandservices->name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('repairsandservices_images').'/'.$repairsandservices->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('repairsandservices_images'), $fileName);
                    $repairsandservices->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            $repairsandservices->description = $request['description'];
            $repairsandservices->status = $request['status'];
             
            if($repairsandservices->save()){
                /*if($request['status'] != $request['status1']){
                    Implementors::where('machine_id', '=', $request['id'])->update(['status' => $request['status']]);
                }*/
               // return response()->json(['status' => 200, 'success' => 'Repairs and Services successfully updated']);
                return redirect()->back()->with('status','Role successfully updated');
            }else{
               // return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('roles.home', compact('roles'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }

    public function repairsandservicesAdd(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:repairs_and_services',
                'addimage' => 'required',
                'adddescription' => 'required',
                'addstatus' => 'required',
            ]);

            //$maxrole = Roles::max('role_id');
            //dd($role);
            $user_id = \Auth::user()->id;
            $repairsandservices = new RepairsAndServices;
            //$repairsandservices->user_id = $user_id;
            $repairsandservices->name = $request['name'];
            //$repairsandservices->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('repairsandservices_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $repairsandservices->image = $fileName;
            $repairsandservices->description = $request['adddescription'];
            $repairsandservices->status = $request['addstatus'];
            //dd("Hello");
            if($repairsandservices->save()){
                //return response()->json(['status' => 200, 'success' => 'Repairs and Services successfully created']);
                return redirect()->back()->with('status','Machine successfully created');
            }else{
               // return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('machines.home', compact('machines'));
        //}else{
            //return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
}
