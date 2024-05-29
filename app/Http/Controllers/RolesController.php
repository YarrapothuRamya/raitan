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
            $roles_with_parent = array();
            foreach ($roles as $key => $value) {
                //echo $key . " " . $value->id . "<br>";
                $roles_with_parent[] = [
                    "id" => $value->id,
                    "name" => $value->name,
                    "role_id" => $value->role_id,
                    "parent_id" => $value->parent_id,
                    "parent_name" => Roles::select('name')->where('id', $value->parent_id)->first(),
                    "status" => $value->status,
                ];
            }
            //dd("Hello");
            return view('roles.home', compact('roles', 'roles_with_parent'));
        }else{
            return redirect()->back()->with('error','You have no access to this page');
        }
        
    }

    public function registerthankyou()
    {
        //dd("Hello");
        return view('register.registerthankyou');
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
            $role->parent_id = $request['parent_id'];
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
                'name' => 'required|unique:roles|max:255',
                'status' => 'required',
            ]);

            $maxrole = Roles::max('role_id');
            //dd($role);
            $role = new Roles;
            $role->name = $request['name'];
            $role->parent_id = $request['add_parent_id'];
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
