<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Sprayers;

class SprayersController extends Controller
{
    public function index()
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            
            $sprayers = Sprayers::select('*')->get();
            
            
            return view('master.sprayers.home', compact('sprayers'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
    public function sprayersaddview(){
        return view('master.sprayers.add');
    }
    public function sprayersedit(Request $request){
        $spary_id = $request->query('spary_id');
        $sprayer = Sprayers::find($spary_id);
        return view('master.sprayers.edit', compact('sprayer'));
    }
    public function sprayersUpdate(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:sprayers,name,'.$request['id'],
                //'image' => 'required',
                'description' => 'required',
                'status' => 'required',
            ]);
            $sprayers = Sprayers::find($request['id']);
            //dd($role);
            //$role->name = $request['name'];
            //$role->parent_id = $request['parent_id'];
            //$role->status = $request['status'];
            $sprayers->name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('sprayers_images').'/'.$sprayers->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('sprayers_images'), $fileName);
                    $sprayers->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            $sprayers->description = $request['description'];
            $sprayers->status = $request['status'];
             
            if($sprayers->save()){
                /*if($request['status'] != $request['status1']){
                    Implementors::where('machine_id', '=', $request['id'])->update(['status' => $request['status']]);
                }*/
                //return response()->json(['status' => 200, 'success' => 'Sprayer successfully updated']);
                return redirect()->back()->with('status','Sprayer successfully updated');
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

    public function sprayersAdd(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:sprayers',
                'addimage' => 'required',
                'adddescription' => 'required',
                'addstatus' => 'required',
            ]);

            //$maxrole = Roles::max('role_id');
            //dd($role);
            $user_id = \Auth::user()->id;
            $sprayers = new Sprayers;
            //$sprayers->user_id = $user_id;
            $sprayers->name = $request['name'];
            //$sprayers->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('sprayers_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $sprayers->image = $fileName;
            $sprayers->description = $request['adddescription'];
            $sprayers->status = $request['addstatus'];
            //dd("Hello");
            if($sprayers->save()){
               // return response()->json(['status' => 200, 'success' => 'Sprayer successfully created']);
                return redirect()->back()->with('status','Sprayer successfully created');
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
