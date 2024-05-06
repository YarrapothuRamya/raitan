<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Roles;

class RolesController extends Controller
{
    public function index()
    {
        $role = \Auth::user()->role;
        if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            $roles=Roles::select('*')->get();
            return view('roles.home', compact('roles'));
        }else{
            return redirect()->back()->with('error','You have no access to this page');
        }
        
    }

    public function roleUpdate(Request $request)
    {
        $role = \Auth::user()->role;
        if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|max:255|unique:roles,name,'.$request['id'],
                'status' => 'required',
            ]);
            $role = Roles::find($request['id']);
            //dd($role);
            $role->name = $request['name'];
            $role->status = $request['status'];
             
            if($role->save()){
                return response()->json(['status' => 200, 'success' => 'Role successfully updated']);
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

    public function roleAdd(Request $request)
    {
        $role = \Auth::user()->role;
        if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique|max:255',
                'status' => 'required',
            ]);

            $maxrole = Roles::max('role_id');
            //dd($role);
            $role = new Roles;
            $role->name = $request['name'];
            $role->role_id = $maxrole+1;
            $role->status = $request['status'];
             
            if($role->save()){
                return response()->json(['status' => 200, 'success' => 'Role successfully created']);
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
}
