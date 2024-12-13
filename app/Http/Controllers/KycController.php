<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_contact;
use App\Models\Kycs;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Services;
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
        // Handle file uploads only if they are present
        if ($request->hasFile('aadhar')) {
            $aadharFile = $request->file('aadhar');
            $aadharPath = 'aadhar_' . $request->input('business_id') . '_' . $currentTime . '.' . $aadharFile->getClientOriginalExtension();
            $aadharFile->move(public_path('kyc'), $aadharPath);
        } else {
            return response()->json(['error' => 'Aadhar file is required'], 400);
        }

        if ($request->hasFile('pan')) {
            $panFile = $request->file('pan');
            $panPath = 'pan'. $request->input('business_id') . '_' . $currentTime . '.' .  $panFile->getClientOriginalExtension();
            $panFile->move(public_path('kyc'), $panPath);
        } else {
            return response()->json(['error' => 'Pan file is required'], 400);
        }

        if ($request->hasFile('vehicle_rc')) {
            $vehicle_rcFile = $request->file('vehicle_rc');
            $vehicle_rcPath = 'vehiclerc' . $request->input('business_id') . '_' . $currentTime . '.' . $vehicle_rcFile->getClientOriginalExtension();
            $vehicle_rcFile->move(public_path('kyc'), $vehicle_rcPath);
        } else {
            return response()->json(['error' => 'Vehicle RC file is required'], 400);
        }

        if ($request->hasFile('licence')) {
            $licenceFile = $request->file('licence');
            $licencePath = 'licence' . $request->input('business_id') . '_' . $currentTime . '.' . $licenceFile->getClientOriginalExtension();
            $licenceFile->move(public_path('kyc'), $licencePath);
        } else {
            return response()->json(['error' => 'Licence file is required'], 400);
        }

        // Create a new KYC record in the database
        $kyc = new Kycs(); // KYC model
        $kyc->driver_name = $request->input('driver_name');
        $kyc->user_id = $request->input('user_id');
        $kyc->business_name = $request->input('business_name');
        $kyc->business_id = $request->input('business_id');
        $kyc->category = $request->input('category');
        $kyc->aadhar_card = $aadharPath;  // Save relative path
        $kyc->pan_card = $panPath;
        $kyc->vehicle_rc = $vehicle_rcPath;
        $kyc->driving_licence = $licencePath;
        $kyc->vehicle_number = $request->input('vehicle_number');
        $kyc->status = '2';  // Initial status as '0'
        $kyc->save();

        // Return a JSON response
        return response()->json(['success' => 'KYC details saved successfully!']);
    }
    public function view(Request $request){
       $user_id =  $request->user_id;
       $business_id =  $request->business_id;
       $customer =  Customer::FindOrFail($user_id);
       $business =  Business_contact::FindOrFail($business_id);
    //    exit;
         $kycs = Kycs::where('user_id', $user_id)->where('business_id', $business_id)->First();
        // exit;
        return view('business.kyceview', compact('kycs', 'business', 'customer' ));
    }
    public function edit(Request $request){
        $user_id =  $request->name;
       $business_id =  $request->business_name;
       $customer =  Customer::FindOrFail($user_id);
        $business =  Business_contact::FindOrFail($business_id);
        $kycs = Kycs::where('user_id', $user_id)->where('business_id', $business_id)->first();
    //    exit;
        return view('business.kycedit', compact('kycs', 'customer', 'business'));
    }
        public function update(Request $request) {
            // Find the KYC record by user ID or business ID
             $user_id = $request->user_id;
              $business_id = $request->business_id;
              $category = $request->category;
              $customer =  Customer::where('name', $user_id)->first();
         $business =  Business_contact::where('business_name', $business_id)->first();
         $category =  Services::where('service_name', $category)->first();
            // exit;
            $kyc = Kycs::where('user_id', $customer->id)->where('business_id', $business->id)->first(); 
        
            $currentTime = now()->format('Y-m-d_H-i-s');
            if ($request->hasFile('aadhar')) {
                $aadharFile = $request->file('aadhar')->store('aadhar_files');
                $aadharFile = $request->file('aadhar');
               
                $aadharPath = 'aadhar_' . $request->input('business_id') . '_' . $currentTime . '.' . $aadharFile->getClientOriginalExtension();
                $aadharFile->move(public_path('kyc'), $aadharPath);
                $kyc->aadhar_card = $aadharPath;
            }
        
            if ($request->hasFile('vehicle_rc')) {
                $vehicle_rcFile = $request->file('vehicle_rc')->store('vehicle_rc_files');
                $vehicle_rcFile = $request->file('vehicle_rc');
                $vehicle_rcPath = 'vehicle_rc_' . $request->input('business_id') . '_' . $currentTime . '.' . $vehicle_rcFile->getClientOriginalExtension();
                $vehicle_rcFile->move(public_path('kyc'), $vehicle_rcPath);
                $kyc->vehicle_rc = $vehicle_rcPath;
            }
            if ($request->hasFile('pan')) {
                $panFile = $request->file('pan')->store('pan_files');
                $panFile = $request->file('pan');
                $panPath = 'pan_' . $request->input('business_id') . '_' . $currentTime . '.' . $panFile->getClientOriginalExtension();
                $panFile->move(public_path('kyc'), $panPath);
                $kyc->pan_card = $panPath;
            }
            if ($request->hasFile('licence')) {
                $licenceFile = $request->file('licence')->store('licence_files');
                $licenceFile = $request->file('licence');
                $licencePath = 'licence_' . $request->input('business_id') . '_' . $currentTime . '.' . $licenceFile->getClientOriginalExtension();
                $licenceFile->move(public_path('kyc'), $licencePath);
                $kyc->driving_licence = $licencePath;
            }

            // Update KYC data
            $kyc->user_id = $customer->id;
            $kyc->business_id = $business->id;
            $kyc->category = $category->id  ;
            $kyc->vehicle_number = $request->vehicle_number;
            $kyc->driver_name = $request->driver_name;
            // $kyc->vehicle_number = $request->vehicle_number;
            // $kyc->driver_name = $request->driver_name;
        
            // Handle file uploads if necessary
            // if ($request->hasFile('aadhar')) {
            //     $kyc->aadhar_file = $request->file('aadhar')->store('aadhar_files');
            // }
        
            // if ($request->hasFile('pan')) {
            //     $kyc->pan_file = $request->file('pan')->store('pan_files');
            // }
        
            // Save the changes
            $kyc->save();
            // echo "KYC Record: " . json_encode($kyc);
            // Respond with a success message
            return redirect()->route('mybusiness.home')->with('success', 'KYC details updated successfully.');
            // return response()->json(['success' => true, 'message' => 'KYC details updated successfully.']);
        }
    }
