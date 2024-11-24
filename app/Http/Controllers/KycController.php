<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_contact;
use App\Models\Kycs;
use Illuminate\Support\Facades\Auth;
class KycController extends Controller
{
    public function kycverify(Request $request){
        $user_id = $request->input('user_id');
         $business_name = $request->input('business_name');
          $business_id = $request->input('business_id');
          $category = $request->input('category');
        return view('business.kyc', compact('user_id', 'business_name', 'business_id','category'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'aadhar' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',
            'pan' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',
            'machinerc' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',
            'oparetorname' => 'required|string|max:255',
            'licence' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',
        ]);

        // Handle file uploads
        // $aadharPath = $request->file('aadhar')->store('kyc/aadhar');
        $aadharPath = $request->file('aadhar');
         $aadharPath = rand()  . '.' . $request->file('aadhar')->getClientOriginalExtension();
// exit;

        $request->file('aadhar')->move(public_path('kyc'), $aadharPath);

        $panPath = $request->file('pan');
        $panPath = rand() . "." . $request->file('pan')->getClientOriginalExtension();
        $request->file('pan')->move(public_path('kyc'), $panPath);

        $machinercPath = $request->file('machinerc');
        $machinercPath = rand() . "." . $request->file('machinerc')->getClientOriginalExtension();
        $request->file('machinerc')->move(public_path('kyc'), $machinercPath);

        $licencePath = $request->file('licence');
        $licencePath = rand() . "." . $request->file('licence')->getClientOriginalExtension();
        $request->file('licence')->move(public_path('kyc'), $licencePath);

        // $panPath = $request->file('pan')->store('kyc/pan');
        // $machinercPath = $request->file('machinerc')->store('kyc/machinerc');
        // $licencePath = $request->file('licence')->store('kyc/licence');
        // $user = Auth::guard('customer')->user(); 
        // echo Auth::guard('customer')->user()->name;
        // exit;
        // Create a new KYC record in the database
        $kyc = new Kycs(); // KYC model
        $kyc->operator_name = $request->input('oparetorname');
        // $kyc->business_id = $request->input('business_id');
        // $kyc->contact_id = $request->input('contact_id');
        $kyc->user_id = $request->input('user_id');
        $kyc->business_name = $request->input('business_name');
        $kyc->business_id = $request->input('business_id');
        $kyc->category = $request->input('category');
        $kyc->aadhar_card = $aadharPath; // Save relative path
        $kyc->pan_card = $panPath;
        $kyc->machine_rc = $machinercPath;
        $kyc->driving_licence = $licencePath;
        $kyc->save();

        // Return a JSON response
        return response()->json(['success' => 'KYC details saved successfully!']);
    }
}

