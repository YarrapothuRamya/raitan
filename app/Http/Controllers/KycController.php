<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_contact;
use App\Models\Kycs;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Services;
use Illuminate\Support\Facades\Validator;
class KycController extends Controller
{
    public function kycverify(Request $request)
    {
        $user_id = $request->input('user_id');
        $business_name = $request->input('business_name');
        $business_id = $request->input('business_id');
        $category = $request->input('category');
        return view('business.kyc', compact('user_id', 'business_name', 'business_id', 'category'));
    }
    public function store(Request $request)
    {
        // Validate the incoming files (optional but recommended)
        $request->validate([
            'aadhar' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',  // Max 10MB
            'pan' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',      // Max 10MB
            'vehicle_rc' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',  // Max 10MB
            'licence' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10240',    // Max 10MB
        ]);
        $currentTime = now()->format('Y-m-d_H-i-s');
        if ($request->hasFile('aadhar')) {
            $aadharFile = $request->file('aadhar');
            $aadharPath = 'aadhar_' . $request->input('business_id') . '_' . $currentTime . '.' . $aadharFile->getClientOriginalExtension();
            $aadharFile->move(public_path('kyc'), $aadharPath);
        } else {
            return response()->json(['error' => 'Aadhar file is required'], 400);
        }

        if ($request->hasFile('pan')) {
            $panFile = $request->file('pan');
            $panPath = 'pan_' . $request->input('business_id') . '_' . $currentTime . '.' .  $panFile->getClientOriginalExtension();
            $panFile->move(public_path('kyc'), $panPath);
        } else {
            return response()->json(['error' => 'Pan file is required'], 400);
        }

        if ($request->hasFile('vehicle_rc')) {
            $vehicle_rcFile = $request->file('vehicle_rc');
            $vehicle_rcPath = 'vehiclerc_' . $request->input('business_id') . '_' . $currentTime . '.' . $vehicle_rcFile->getClientOriginalExtension();
            $vehicle_rcFile->move(public_path('kyc'), $vehicle_rcPath);
        } else {
            return response()->json(['error' => 'Vehicle RC file is required'], 400);
        }

        if ($request->hasFile('licence')) {
            $licenceFile = $request->file('licence');
            $licencePath = 'licence_' . $request->input('business_id') . '_' . $currentTime . '.' . $licenceFile->getClientOriginalExtension();
            $licenceFile->move(public_path('kyc'), $licencePath);
        } else {
            return response()->json(['error' => 'Licence file is required'], 400);
        }
        $kyc = new Kycs();
        $kyc->driver_name = $request->input('driver_name');
        $kyc->user_id = $request->input('user_id');
        $kyc->business_name = $request->input('business_name');
        $kyc->business_id = $request->input('business_id');
        $kyc->category = $request->input('category');
        $kyc->aadhar_card = $aadharPath;
        $kyc->pan_card = $panPath;
        $kyc->vehicle_rc = $vehicle_rcPath;
        $kyc->driving_licence = $licencePath;
        $kyc->vehicle_number = $request->input('vehicle_number');
        $kyc->status = '2';
        $kyc->save();
        return response()->json(['success' => 'KYC details saved successfully!']);
    }
    public function view(Request $request)
    {
        $user_id =  $request->user_id;
        $business_id =  $request->business_id;
        $customer =  Customer::FindOrFail($user_id);
        $business =  Business_contact::FindOrFail($business_id);
        $kycs = Kycs::where('user_id', $user_id)->where('business_id', $business_id)->First();
        return view('business.kyceview', compact('kycs', 'business', 'customer'));
    }
    public function edit(Request $request)
    {
        $user_id =  $request->name;
        $business_id =  $request->business_name;
        $customer =  Customer::FindOrFail($user_id);
        $business =  Business_contact::FindOrFail($business_id);
        $kycs = Kycs::where('user_id', $user_id)->where('business_id', $business_id)->first();
        return view('business.kycedit', compact('kycs', 'customer', 'business'));
    }
    public function update(Request $request)
    {
        // exit;
        $validated = $request->validate([
           'aadhar' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048', // Validate Aadhar Card file
            'pan' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048', // Validate PAN Card file
            'vehicle_rc' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048', // Validate Vehicle RC file
            'vehicle_number' => 'required_if:vehicle_rc,!=,null|string|max:20', // Vehicle number required if Vehicle RC is provided
            'driver_name' => 'required_if:driver_name,!=,null|string|max:100', // Driver name required if Driving Licence is provided
            'licence' => 'required_if:licence,!=,null|mimes:jpeg,png,jpg,pdf|max:2048', // Validate Driving Licence file
        ]);

        
        // // return response()->json(['success' => 'KYC details saved successfully!']);
        // return redirect()->route('mybusiness.home')->with('success', 'KYC details updated successfully.');
        try {
            $user_id = $request->user_id;
        $business_id = $request->business_id;
        $category = $request->category;
        $customer =  Customer::where('name', $user_id)->first();
        $business =  Business_contact::where('business_name', $business_id)->first();
        $category =  Services::where('service_name', $category)->first();

        $kyc = Kycs::where('user_id', $customer->id)->where('business_id', $business->id)->first();
       
        $currentTime = now()->format('Y-m-d_H-i-s');

        if ($kyc->aadhar_card && file_exists(public_path('kyc/' . $kyc->aadhar_card))) {
            // Delete the existing file
            unlink(public_path('kyc/' . $kyc->aadhar_card));
        }

        if ($request->hasFile('aadhar')) {
            $aadharFile = $request->file('aadhar');
            $aadharPath = 'aadhar_' . $business->id . '_' . $currentTime . '.' . $aadharFile->getClientOriginalExtension();
            $aadharFile->move(public_path('kyc'), $aadharPath);
            $kyc->aadhar_card = $aadharPath;
            $kyc->aadhar_status = '';
        }
        if ($kyc->vehicle_rc && file_exists(public_path('kyc/' . $kyc->vehicle_rc))) {
            // Delete the existing file
            unlink(public_path('kyc/' . $kyc->vehicle_rc));
        }
        if ($request->hasFile('vehicle_rc')) {
            $vehicle_rcFile = $request->file('vehicle_rc');
            $vehicle_rcPath = 'vehicle_rc_' . $business->id. '_' . $currentTime . '.' . $vehicle_rcFile->getClientOriginalExtension();
            $vehicle_rcFile->move(public_path('kyc'), $vehicle_rcPath);
            $kyc->vehicle_rc = $vehicle_rcPath;
            
            $kyc->vehicle_status = '';
        }
        if($request->vehicle_number){
            $kyc->vehicle_number = $request->vehicle_number;
        }
        if ($kyc->pan_card && file_exists(public_path('kyc/' . $kyc->pan_card))) {
            // Delete the existing file
            unlink(public_path('kyc/' . $kyc->pan_card));
        }
        if ($request->hasFile('pan')) {
            $panFile = $request->file('pan');
            $panPath = 'pan_' . $business->id . '_' . $currentTime . '.' . $panFile->getClientOriginalExtension();
            $panFile->move(public_path('kyc'), $panPath);
            $kyc->pan_card = $panPath;
            $kyc->pan_status = '';
        }
        if ($kyc->driving_licence && file_exists(public_path('kyc/' . $kyc->driving_licence))) {
            // Delete the existing file
            unlink(public_path('kyc/' . $kyc->driving_licence));
        }
        if ($request->hasFile('licence')) {
            $licenceFile = $request->file('licence');
            $licencePath = 'licence_' . $business->id . '_' . $currentTime . '.' . $licenceFile->getClientOriginalExtension();
            $licenceFile->move(public_path('kyc'), $licencePath);
            $kyc->driving_licence = $licencePath;
            
            $kyc->driving_status = '';
        }
        if($request->driver_name){
            $kyc->driver_name = $request->driver_name;
        }
        $kyc->save();
            // Your form processing logic here (e.g., saving KYC details to database)
            
            // Return success response if everything is good
            return response()->json(['success' => 'KYC details saved successfully!']);
        } catch (\Exception $e) {
            // Return error response
            return response()->json(['error' => 'Error saving KYC details. Please try again.'], 500);
        }
    }
}
