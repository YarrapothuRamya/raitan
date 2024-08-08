<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Services;
use App\Models\Roles;
use App\Models\User;
use App\Models\Customer;
use App\Models\Business_contact;
use App\Models\Implementors;
use App\Models\Agriculture_Labour;
use App\Models\RepairsAndServices;
use App\Models\Sprayers;
use App\Models\Request_role;
use App\Models\User_Login_Logs;
use App\Models\Common_logs;

class BusinessController extends Controller
{
    public function businessContact(Request $request)
    {
        $validated = $request->validate([
            'mobile' => 'required',
           
        ]);
        $mobileno=$request->input('mobile');
        $services = Services::select('*')->where('status', '=', 1)->get();
        $businessContact = Business_contact::where('mobile', $validated['mobile'])->first();
        //echo $mobileno;die;
        if ($businessContact) {
                return view('business.addcontact',  [  'services' => $services,  'mobileno' => $mobileno,  'existingData' => $businessContact]);
          
        } else {
            return view('business.addcontact', compact('services','mobileno',));
        }
        //return view('business.addcontact', compact('services','mobileno','existingData'));
    }
    public function businessAddress(Request $request){

    
            $validated = $request->validate([
                'id' => 'nullable|exists:business_contacts,id',
                'title' => 'required|string|max:255',
                'contactPerson' => 'required|string|max:255',
                'mobileNumber' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'whatsappNumber'=>'required',
            ]);
       
       // echo "hello world";die;
       // Create a new BusinessContact record

       $id = $validated['id'] ?? null;  // ID for the record to be updated

   
        // Update existing record
        $businessContact = Business_contact::where('id', $id)
        ->where('title', $validated['title'])
        ->first();
        if ($businessContact) {
        $businessContact->title = $validated['title'];
        $businessContact->name = $validated['contactPerson'];
        $businessContact->mobile = $validated['mobileNumber'];
        $businessContact->whatsapp_no = $validated['whatsappNumber'];
        $businessContact->email = $validated['email'];
        $businessContact->updated_at = now();
        //print_r($businessContact);die;

        if($businessContact->save()){
            $lastInsertedId = $id;
            // return response()->json(['status' => 200, 'success' => 'Machine successfully created']);
            //return redirect()->route('address.home')->with('success', 'Contact details saved successfully! Last inserted ID: ' . $lastInsertedId);
            return view('business.address', compact('lastInsertedId'));
             //return redirect()->back()->with('status','Machine successfully created');
         }
        
    } else {
        // Create new record
        $businessContact = new Business_contact;
        $businessContact->title = $validated['title'];
        $businessContact->name = $validated['contactPerson'];
        $businessContact->mobile = $validated['mobileNumber'];
        $businessContact->whatsapp_no = $validated['whatsappNumber'];
        $businessContact->email = $validated['email'];
        $businessContact->status = 1;
        $businessContact->created_at = now();
        $message = 'Contact details saved successfully!';
        if($businessContact->save()){
            $lastInsertedId = $businessContact->id;
            // return response()->json(['status' => 200, 'success' => 'Machine successfully created']);
            //return redirect()->route('address.home')->with('success', 'Contact details saved successfully! Last inserted ID: ' . $lastInsertedId);
            return view('business.address', compact('lastInsertedId'));
             //return redirect()->back()->with('status','Machine successfully created');
         }
    }
        // Check and save optional fields if they are provided
        // if (!empty($validatedData['alternateEmail'])) {
        //     $businessContact->alt_email = $validatedData['alternateEmail'];
        // }

        // if (!empty($validatedData['additionalMobileNumber'])) {
        //     $businessContact->alt_mobile = $validatedData['additionalMobileNumber'];
        // }
//print_r($businessContact);die;
        // Save the record to the database
        if($businessContact->save()){
            $lastInsertedId = $businessContact->id;
            // return response()->json(['status' => 200, 'success' => 'Machine successfully created']);
            //return redirect()->route('address.home')->with('success', 'Contact details saved successfully! Last inserted ID: ' . $lastInsertedId);
            return view('business.address', compact('lastInsertedId'));
             //return redirect()->back()->with('status','Machine successfully created');
         }
        
  
        // Get the last inserted ID
        

        // Optionally, you can use this ID to redirect or pass it to another method
      
    }
}