<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Services;
use App\Models\Roles;
use App\Models\User;
use App\Models\Customer;
use App\Models\Implementors;
use App\Models\Agriculture_Labour;
use App\Models\RepairsAndServices;
use App\Models\Sprayers;
use App\Models\Business_contact;
use App\Models\Request_role;
use App\Models\User_Login_Logs;
use App\Models\Common_logs;
use App\Models\Horse_power_implements;
use App\Models\Machines;


class CommonController extends Controller
{
    public function indexroot()
    {
        $services = Services::select('*')->where('status', '=', 1)->get();
        $tractor_implementors = Implementors::select("*")->where("status", 1)->whereIn("id", [1,2,3])->get();
        $agriculture_labour = Agriculture_Labour::select("*")->where("status", 1)->whereIn("id", [1,2,3])->get();
        $repairsandservices = RepairsAndServices::select("*")->where("status", 1)->whereIn("id", [1,2,3])->get();
        $sprayers = Sprayers::select("*")->where("status", 1)->whereIn("id", [1,2,3])->get();
        return view('welcome', compact('services', 'tractor_implementors', 'agriculture_labour', 'repairsandservices', 'sprayers'));
    }

    public function productdetails()
    {
        return view('productdetails.home');
    }

    public function implementsdetails(Request $request)
    { 
        $impleId = $request->query('imp_id');
        $machineId = $request->query('machineid');
        $horse_power_implements = Horse_power_implements::find($impleId);
        $machines = Machines::find($machineId);
    // $machines=Machines::select('*')->get();
    
    return view('implementsdetails.home', compact('machines', 'horse_power_implements'));

    }

    public function user_dashboard()
    {
        $user_id = \Auth::user()->id;
        //$roles = Roles::select("roles.id as role_master_id","roles.name as role_master_name","roles.role_id as role_master_role_id","roles.status as role_master_status","request_roles.user_id as request_roles_user_id","request_roles.role_id as request_roles_role_id","request_roles.role_permission_status as request_roles_permission_status")->leftJoin("request_roles", "request_roles.role_id", "=","roles.role_id")->whereNotIn('roles.role_id', [1,2,3,4])->where('roles.status', 1)->where('request_roles.user_id', $user_id)->orderBy("roles.role_id")->get();
        //dd($roles);
        $user_id = \Auth::user()->id;
        $roles = Roles::select("*")->whereNotIn('roles.role_id', [1,2,3,4,8])->where('roles.status', 1)->orderBy("roles.role_id")->get();
        $request_roles = Request_role::select("*")->where("user_id", $user_id)->get();


        $data = array();
        foreach ($roles as $key => $value) {
            //foreach ($request_roles as $key1 => $value1) {
                //if($value->role_id == $value1->role_id){
                    //print($value->role_id . " " . $value1->role_id);
                    //print("<br>");
                    $data[] = $value->role_id;//[
                        //"role_master_id" => $value->id,
                    //];
                //}
            //}
        }

        $data2 = array();
        $request_roles_count = Request_role::select("*")->whereIn('role_id', $data)->where("user_id", $user_id)->get()->count();
        if($request_roles_count > 0){
            foreach ($data as $value3) {
                $request_roles_count_with_user = Request_role::select("*")->where('role_id', $value3)->where("user_id", $user_id)->get()->count();
                $request_roles_count_with_user_string = Request_role::select("*")->where('role_id', $value3)->where("user_id", $user_id)->get();

                //dd($request_roles_count_with_user_string[0]);
                if($request_roles_count_with_user > 0){

                    $role_name = Roles::where('role_id', $request_roles_count_with_user_string[0]->role_id)->get();
                    $data2[] = [
                        "role_master_name" => $role_name[0]->name,
                        "role_master_role_id" => $request_roles_count_with_user_string[0]->role_id,
                        "request_roles_permission_status" => $request_roles_count_with_user_string[0]->role_permission_status,
                    ];
                }else{
                    $role_name = Roles::where('role_id', $value3)->get();
                    $data2[] = [
                        "role_master_name" => $role_name[0]->name,
                        "role_master_role_id" => $value3,
                        "request_roles_permission_status" => 0,
                    ];
                }
            }
        }else{
            $roles = Roles::select("*")->whereNotIn('roles.role_id', [1,2,3,4,8])->where('roles.status', 1)->orderBy("roles.role_id")->get();
            foreach ($roles as $key => $value) {
                $data2[] = [
                        "role_master_name" => $value->name,
                        "role_master_role_id" => $value->role_id,
                        "request_roles_permission_status" => 0,
                    ];
            }
        }
        //dd("End");

        $roles = json_decode(json_encode((object) $data2), FALSE);//$data2;


        return view('user.dashboard', compact('roles'));
    }

    public function add_role_request(Request $request)
    {
        try {
            //$role = \Auth::user()->role;
            //if($role == 1){
                //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
                //dd("Hello");
                //dd($request['name']);
                //dd($request->role_master_role_id);
                if ($request->role_master_role_id == 5) {
                    //dd("5");
                    $validated = $request->validate([
                        'role_master_role_id' => 'required',
                        'role_id_permission_status' => 'required',
                        'aadhar' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
                        //'pan' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
                    ],$messages = [
                        'mimes' => 'Please insert image only',
                        //'max'   => 'Image should be less than 4 MB'
                    ]);
                    //dd("5");
                }elseif ($request->role_master_role_id == 6) {
                    $validated = $request->validate([
                        'role_master_role_id' => 'required',
                        'role_id_permission_status' => 'required',
                        'aadhar' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
                        'pan' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
                    ],$messages = [
                        'aadhar.mimes' => 'Please insert Aadhar image only',
                        'pan.mimes' => 'Please insert PAN image only',
                        //'max'   => 'Image should be less than 4 MB'
                    ]);
                }elseif ($request->role_master_role_id == 7){
                    $validated = $request->validate([
                        'role_master_role_id' => 'required',
                        'role_id_permission_status' => 'required',
                        'aadhar' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
                        'pan' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
                    ],$messages = [
                        'aadhar.mimes' => 'Please insert Aadhar image only',
                        'pan.mimes' => 'Please insert PAN image only',
                        //'max'   => 'Image should be less than 4 MB'
                    ]);
                }
                

                $user_id = \Auth::user()->id;
                $request_roles_count = Request_role::where('user_id', '=', $user_id)->
                                               where('role_id', '=', $request['role_master_role_id'])->get()->count();
                
                if($request_roles_count > 0){
                    $request_roles = Request_role::where('user_id', '=', $user_id)->
                                               where('role_id', '=', $request['role_master_role_id'])->first();
                }else{
                    $request_roles = new Request_role;
                }
                
                $request_roles->user_id = $user_id;
                $request_roles->role_id = $request['role_master_role_id'];
                $request_roles->role_permission_status = $request['role_id_permission_status'];
                
                

                $aadhar = $request->file('aadhar');
                $fileName = rand() . "." . $request->file('aadhar')->getClientOriginalExtension();
                $request->file('aadhar')->move(public_path('aadhar_files'), $fileName);
                    
                //}
                $request_roles->aadhar = $fileName;

                if($request['role_master_role_id'] == 6 || $request['role_master_role_id'] == 7){
                    $filename = "";
                    $pan = $request->file('pan');
                    $fileName = rand() . "." . $request->file('pan')->getClientOriginalExtension();
                    $request->file('pan')->move(public_path('pan_files'), $fileName);
                        
                    //}
                    $request_roles->pan = $fileName;
                }else{
                    $request_roles->pan = "";
                }
                

                $request_roles->GST = $request['gst'];

                if($request_roles->save()){
                    $curTime = new \DateTime();
                    $currentDatetime = $curTime->format("Y-m-d H:i:s");
                    $clientIP = \Request::ip();
                    if ($request->role_master_role_id == 5) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Successfully requested permission for sales',
                            'status' => 'Sales Permission Request Successful',
                            'audit_time' => $currentDatetime,
                            'ipaddress' => $clientIP,
                        ]);
                    }elseif ($request->role_master_role_id == 6) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Successfully requested permission for agents',
                            'status' => 'Agents Permission Request Successful',
                            'audit_time' => $currentDatetime,
                            'ipaddress' => $clientIP,
                        ]);
                    }elseif ($request->role_master_role_id == 7){
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Successfully requested permission for Sellers',
                            'status' => 'Sellers Permission Request Successful',
                            'audit_time' => $currentDatetime,
                            'ipaddress' => $clientIP,
                        ]);
                    }


                    $data = [
                      'success' => true,
                      'message'=> 'Permission successfully requested.'
                    ] ;
                    return response()->json($data);
                }else{
                    $curTime = new \DateTime();
                    $currentDatetime = $curTime->format("Y-m-d H:i:s");
                    $clientIP = \Request::ip();
                    if ($request->role_master_role_id == 5) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Something went wrong, Please try again!',
                            'status' => 'Sales Permission Request Error',
                            'audit_time' => $currentDatetime,
                            'ipaddress' => $clientIP,
                        ]);
                    }elseif ($request->role_master_role_id == 6) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Something went wrong, Please try again!',
                            'status' => 'Agents Permission Request Error',
                            'audit_time' => $currentDatetime,
                            'ipaddress' => $clientIP,
                        ]);
                    }elseif ($request->role_master_role_id == 7){
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Something went wrong, Please try again!',
                            'status' => 'Sellers Permission Request Error',
                            'audit_time' => $currentDatetime,
                            'ipaddress' => $clientIP,
                        ]);
                    }
                    $data = [
                      'error' => true,
                      'message'=> 'Something went wrong, Please try again!'
                    ] ;
                    return response()->json($data);
                }
                //return redirect()->back()->with('name','You have no access to this page');
                //return view('machines.home', compact('machines'));
            //}else{
                //return redirect()->back()->with('error','You have no access to this page');
            //}
        } catch (\Exception $e) {
            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");
            $clientIP = \Request::ip();
            if ($request->role_master_role_id == 5) {
                Common_logs::create([
                    'user_id' => Auth::user()->id,
                    'user_phone' => Auth::user()->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'Sales Permission Request Error',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
            }elseif ($request->role_master_role_id == 6) {
                Common_logs::create([
                    'user_id' => Auth::user()->id,
                    'user_phone' => Auth::user()->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'Agents Permission Request Error',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
            }elseif ($request->role_master_role_id == 7){
                Common_logs::create([
                    'user_id' => Auth::user()->id,
                    'user_phone' => Auth::user()->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'Sellers Permission Request Error',
                    'audit_time' => $currentDatetime,
                    'ipaddress' => $clientIP,
                ]);
            }
            $data = [
              'error' => true,
              'message'=> $e->getMessage(),
            ] ;
            return response()->json($data);
        }
        
        
    }

    public function cancel_role_request_user(Request $request)
    {
        try {
            //$role = \Auth::user()->role;
            //if($role == 1){
                //$roles=Roles::select('name','role_id')->whereNotIn('role_id', [1,2,3])->get();
                //dd("Hello");
                //dd($request['name']);
                $validated = $request->validate([
                    //'role_id' => 'required',
                    'role_master_role_id' => 'required',
                    'role_id_permission_status' => 'required',
                ]);

                $user_id = \Auth::user()->id;
                $request_roles = Request_role::where('user_id', '=', $user_id)->
                                               where('role_id', '=', $request['role_master_role_id'])->first();
                $request_roles->user_id = $user_id;
                $request_roles->role_id = $request['role_master_role_id'];
                $request_roles->role_permission_status = $request['role_id_permission_status'];
                if($request_roles->save()){
                    $curTime = new \DateTime();
                    $currentDatetime = $curTime->format("Y-m-d H:i:s");
                    if ($request->role_master_role_id == 5) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Successfully cancelled request permission for sales',
                            'status' => 'Sales Permission Request cancel by user Successful',
                            'audit_time' => $currentDatetime,
                        ]);
                    }elseif ($request->role_master_role_id == 6) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Successfully cancelled request permission for agents',
                            'status' => 'Agents Permission Request cancel by user Successful',
                            'audit_time' => $currentDatetime,
                        ]);
                    }elseif ($request->role_master_role_id == 7){
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Successfully cancelled request permission for Sellers',
                            'status' => 'Sellers Permission Request cancel by user Successful',
                            'audit_time' => $currentDatetime,
                        ]);
                    }
                    $data = [
                      'success' => true,
                      'message'=> 'Request successfully cancelled.'
                    ] ;
                    return response()->json($data);

                    return redirect()->back()->with('status', 'Permission Requested!');
                    return redirect()->back()->with('status','Modified Machine Successfully!');
                }else{
                    $curTime = new \DateTime();
                    $currentDatetime = $curTime->format("Y-m-d H:i:s");
                    if ($request->role_master_role_id == 5) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Something went wrong, Please try again!',
                            'status' => 'Sales Permission Request cancel by user Error',
                            'audit_time' => $currentDatetime,
                        ]);
                    }elseif ($request->role_master_role_id == 6) {
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Something went wrong, Please try again!',
                            'status' => 'Agents Permission Request cancel by user Error',
                            'audit_time' => $currentDatetime,
                        ]);
                    }elseif ($request->role_master_role_id == 7){
                        Common_logs::create([
                            'user_id' => Auth::user()->id,
                            'user_phone' => Auth::user()->mobile,
                            'description' => 'Something went wrong, Please try again!',
                            'status' => 'Sellers Permission Request cancel by user Error',
                            'audit_time' => $currentDatetime,
                        ]);
                    }
                    $data = [
                      'error' => true,
                      'message'=> 'Something went wrong, Please try again!'
                    ] ;
                    return response()->json($data);
                    return response()->json(['status' => 400, 'error' => 'Something went wrong, Please try again!']);
                    return redirect()->back()->with('error','Something went wrong, Please try again!');
                }
                //return redirect()->back()->with('name','You have no access to this page');
                //return view('machines.home', compact('machines'));
            //}else{
                //return redirect()->back()->with('error','You have no access to this page');
            //}
        } catch (\Exception $e) {
            $curTime = new \DateTime();
            $currentDatetime = $curTime->format("Y-m-d H:i:s");
            if ($request->role_master_role_id == 5) {
                Common_logs::create([
                    'user_id' => Auth::user()->id,
                    'user_phone' => Auth::user()->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'Sales Permission Request cancel by user Error',
                    'audit_time' => $currentDatetime,
                ]);
            }elseif ($request->role_master_role_id == 6) {
                Common_logs::create([
                    'user_id' => Auth::user()->id,
                    'user_phone' => Auth::user()->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'Agents Permission Request cancel by user Error',
                    'audit_time' => $currentDatetime,
                ]);
            }elseif ($request->role_master_role_id == 7){
                Common_logs::create([
                    'user_id' => Auth::user()->id,
                    'user_phone' => Auth::user()->mobile,
                    'description' => $e->getMessage(),
                    'status' => 'Sellers Permission Request cancel by user Error',
                    'audit_time' => $currentDatetime,
                ]);
            }
            $data = [
              'error' => true,
              'message'=> $e->getMessage(),
            ] ;
            return response()->json($data);
        }
        
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
                return response()->json(['status' => 200, 'success' => 'Added Service Successfully.']);
                return redirect()->back()->with('status','Modified Machine Successfully');
            }else{
                return response()->json(['status' => 400, 'error' => 'Something went wrong, Please try again!']);
                return redirect()->back()->with('error','Something went wrong, Please try again!');
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
                return response()->json(['status' => 200, 'success' => 'Modified Service Successfully!']);
                return redirect()->back()->with('status','Role successfully updated');
            }else{
                return response()->json(['status' => 400, 'error' => 'Something went wrong, Please try again!']);
                return redirect()->back()->with('error','Something went wrong, Please try again!');
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

    public function faqs()
    {
        return view('pages.faq');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }

    public function editservice()
    {
        return view('pages.editservice');
    }

    public function userprofile()
    {
//        print_r(Auth::guard('customer')->user()); die();
        $user_data = Customer::find(Auth::guard('customer')->user()->id);
        return view('pages.userprofile',['user_data'=>$user_data]);
    }

    public function bookings()
    {
        return view('pages.bookings');
    }

    public function listing()
    {
        return view('business.listing');
    }

    public function businessAddress()
    {
        return view('business.address');
    }

    public function businessTimings()
    {
        return view('business.timings');
    }

    public function businessCategory()
    {
        return view('business.category');
    }

    public function businessContact()
    {
        return view('business.addcontact');
    }

    public function businessProfile()
    {
        return view('business.businessProfile');
    }

    public function mybusiness()
    {
        $addressId = session('address_id');

        if ($addressId) {
            // Now you can use $addressId to fetch data or perform actions
            //$businessContact = BusinessContact::find($addressId);
            $business = BusinessContact::where('id', $addressId)->first(); // Adjust based on your table and relationship

            // Pass the business data to the view
            return view('business.mybusiness', compact('business'));
           
        }
        return view('business.mybusiness');
    }

    public function advertiseplans()
    {
        return view('business.advertiseplans');
    }

    public function choosepayment()
    {
        return view('business.choosepayment');
    }

    public function addphoto()
    {
        return view('business.addphoto');
    }

    public function additionalcontact()
    {
        return view('business.additionalcontact');
    }

    public function serviceprovider()
    {
        return view('serviceprovider.home');
    }

    public function serviceproviderdetails()
    {
        return view('serviceprovider.serviceproviderdetails');
    }

    public function edittimings()
    {
        return view('business.edittimings');
    }

    public function addSocialLinks()
    {
        return view('business.addsociallinks');
    }


    public function sellerdetails()
    {
        return view('pages.sellerdetails');
    }

    public function sales_activity()
    {
        return view('user.sales.sales_activity');
    }

    public function agent_activity()
    {
        return view('user.agent.agent_activity');
    }

    public function seller_activity()
    {
        return view('user.seller.seller_activity');
    }
}
