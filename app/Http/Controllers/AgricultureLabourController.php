<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Agriculture_Labour;

class AgricultureLabourController extends Controller
{
    public function index()
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            
            $agriculture_labour = Agriculture_Labour::select('*')->get();
            
            
            return view('master.agriculture_labour.home', compact('agriculture_labour'));
        //}else{
        //    return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
    public function agriculturelabourAddview() {
        return view('master.agriculture_labour.add');
    }
    public function agriculturelabouredit(Request $request) {
        $agriId = $request->query('agri_id');
        $agriculture_labour = Agriculture_Labour::find($agriId);
        return view('master.agriculture_labour.edit', compact('agriculture_labour'));
    }
    public function agriculturelabourUpdate(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:agriculture__labours,name,'.$request['id'],
                //'image' => 'required',
                'description' => 'required',
                'status' => 'required',
            ]);
            $agriculture_labour = Agriculture_Labour::find($request['id']);
            //dd($role);
            //$role->name = $request['name'];
            //$role->parent_id = $request['parent_id'];
            //$role->status = $request['status'];
            $agriculture_labour->name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('agriculture_labour_images').'/'.$agriculture_labour->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('agriculture_labour_images'), $fileName);
                    $agriculture_labour->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            $agriculture_labour->description = $request['description'];
            $agriculture_labour->status = $request['status'];
             
            if($agriculture_labour->save()){
                /*if($request['status'] != $request['status1']){
                    Implementors::where('machine_id', '=', $request['id'])->update(['status' => $request['status']]);
                }*/
                //return response()->json(['status' => 200, 'success' => 'Agriculture Labour successfully updated']);
                return redirect()->back()->with('status','Agriculture successfully updated');
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

    public function agriculturelabourAdd(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:agriculture__labours',
                'addimage' => 'required',
                'adddescription' => 'required',
                'addstatus' => 'required',
            ]);

            //$maxrole = Roles::max('role_id');
            //dd($role);
            $user_id = \Auth::user()->id;
            $agriculture_labour = new Agriculture_Labour;
            //$agriculture_labour->user_id = $user_id;
            $agriculture_labour->name = $request['name'];
            //$agriculture_labour->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('agriculture_labour_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $agriculture_labour->image = $fileName;
            $agriculture_labour->description = $request['adddescription'];
            $agriculture_labour->status = $request['addstatus'];
            //dd("Hello");
            if($agriculture_labour->save()){
                //return response()->json(['status' => 200, 'success' => 'Agriculture Labour successfully created']);
                return redirect()->back()->with('status','Agriculture successfully created');
            }else{
                //return response()->json(['status' => 400, 'error' => 'Something went wrong please try again.']);
                return redirect()->back()->with('error','Something went wrong please try again.');
            }
            //return redirect()->back()->with('name','You have no access to this page');
            //return view('machines.home', compact('machines'));
        //}else{
            //return redirect()->back()->with('error','You have no access to this page');
        //}
        
    }
}
