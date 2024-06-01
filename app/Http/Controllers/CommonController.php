<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class CommonController extends Controller
{
    public function indexroot()
    {
        $services = Services::select('*')->where('status', '=', 1)->get();
        return view('welcome', compact('services'));
    }

    public function productdetails()
    {
        return view('productdetails.home');
    }


    public function admin_services()
    {
        $services = Services::select('*')->get();

        return view('master.services', compact('services'));
    }

    public function serviceAdd(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:services,service_name',
                'addimage' => 'required',
                'adddescription' => 'required',
                'addroute' => 'required',
                'addstatus' => 'required',
            ]);

            //$maxrole = Roles::max('role_id');
            //dd($role);
            //$user_id = \Auth::user()->id;
            $service = new Services;
            //$machine->user_id = $user_id;
            $service->service_name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('addimage');
                $fileName = rand() . "." . $request->file('addimage')->getClientOriginalExtension();
                $request->file('addimage')->move(public_path('service_images'), $fileName);
                //$user->update(['photo' => $fileName]);
            //}
            $service->image = $fileName;
            $service->description = $request['adddescription'];
            $service->route = $request['addroute'];
            $service->status = $request['addstatus'];
            //dd("Hello");
            if($service->save()){
                return response()->json(['status' => 200, 'success' => 'Service successfully added.']);
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

    public function serviceUpdate(Request $request)
    {
        //$role = \Auth::user()->role;
        //if($role == 1){
            //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
            //dd("Hello");
            //dd($request['name']);
            $validated = $request->validate([
                'name' => 'required|unique:services,service_name,'.$request['id'],
                //'image' => 'required',
                'description' => 'required',
                'route' => 'required',
                'status' => 'required',
            ]);
            $service = Services::find($request['id']);
            //dd($role);
            //$role->name = $request['name'];
            //$role->parent_id = $request['parent_id'];
            //$role->status = $request['status'];
            $service->service_name = $request['name'];
            //$machine->image = $request['addimage'];
            //if ($request->hasFile('photo')) {
                $image = $request->file('image');
                if ($request->file('image') != '' || $request->file('image') != NULL) {
                    $file_path = public_path('service_images').'/'.$service->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                    $fileName = rand() . "." . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path('service_images'), $fileName);
                    $service->image = $fileName;
                }
                
                //$user->update(['photo' => $fileName]);
            //}
            
            $service->description = $request['description'];
            $service->route = $request['route'];
            $service->status = $request['status'];
             
            if($service->save()){
                /*if($request['status'] != $request['status1']){
                    Implementors::where('machine_id', '=', $request['id'])->update(['status' => $request['status']]);
                }*/
                return response()->json(['status' => 200, 'success' => 'Service successfully updated']);
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

    public function services()
    {
        return view('services.service');
    }

    public function contactus()
    {
        return view('contactus.contactus');
    }


    public function pagenotfound()
    {
        return view('pages.pagenotfound');
    }
}
