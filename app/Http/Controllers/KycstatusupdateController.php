<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kycs;
use App\Models\Kycstatus;
class KycstatusupdateController extends Controller
{
    public function index(){
       $kycs =  Kycs::all();
        return view('master.kycstatusupdate.index', compact('kycs'));
    }
    public function edit(Request $request, $id){
        $kycss = Kycs::where('id', $id)->firstOrFail();
       
        $kycstatus = Kycstatus::whereIn('id', [3, 4])->get();
        return view('master.kycstatusupdate.edit', compact('kycss', 'kycstatus'));
    }
    public function update(Request $request, $id){
        $Kycs = Kycs::findOrFail($id);
        // echo $request->input('aadhar_status');
        // exit;
        if($request->input('aadhar_status') == '3'){
            $aadhar_reason = $request->input('aadhar_reason');
        }
        else{
            $aadhar_reason = '';
        }
        if($request->input('pan_status') == '3'){
            $pan_reason = $request->input('pan_reason');
        }
        else{
            $pan_reason = '';
        }
        if($request->input('vehicle_status') == '3'){
            $vehicle_reason = $request->input('vehicle_reason');
        }
        else{
            $vehicle_reason = '';
        }
        if($request->input('driving_status') == '3'){
            $driving_reason = $request->input('driving_reason');
        }
        else{
            $driving_reason = '';
        }
        
        $Kycs->update([
            'aadhar_status' => $request->input('aadhar_status'),
                'pan_status' => $request->input('pan_status'),
                'vehicle_status' => $request->input('vehicle_status'),
                'driving_status' => $request->input('driving_status'),
                
                'aadhar_reason' => $aadhar_reason,
                'pan_reason' => $pan_reason,
                'vehicle_reason' => $vehicle_reason,
                'driving_reason' => $driving_reason,
        ]);
        $kycs =  Kycs::all();
        return redirect()->route('Business_contact')->with('success', 'KYC Status Updated Successfully');
        // return view('master.kycstatusupdate.index', compact('kycs'));       
    }
}
