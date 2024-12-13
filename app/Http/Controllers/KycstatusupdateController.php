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
       
        $kycstatus =  Kycstatus::all();
    //    exit;
        return view('master.kycstatusupdate.edit', compact('kycss', 'kycstatus'));
    }
    public function update(Request $request, $id){
        $Kycs = Kycs::findOrFail($id);
        // echo $request->input('aadhar_status');
        // exit;
        $Kycs->update([
            'aadhar_status' => $request->input('aadhar_status'),
                'pan_status' => $request->input('pan_status'),
                'vehicle_status' => $request->input('vehicle_status'),
                'driving_status' => $request->input('driving_status'),
        ]);
        $kycs =  Kycs::all();
        return view('master.kycstatusupdate.index', compact('kycs'));       
    }
}
