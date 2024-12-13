<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kycstatus;
class KycstatusController extends Controller
{
    public function index(){
        $kycstatus = Kycstatus::all();
        return view('master.kycstatus.index', compact('kycstatus'));
    }
    public function form(){
        return view('master.kycstatus.form');
    }
    public function store(Request $request){
        KycStatus::create([
            'status' => $request->input('status'), // Assuming 'name' is the only field you're storing
        ]);

        // Redirect with a success message (you can adjust this)
        return redirect()->route('master.kycstatus')->with('success', 'KYC status added successfully!');
    
    }
    public function edit(Request $request, $id){
        $kycStatus = KycStatus::where('id', $id)->get();
        return view('master.kycstatus.edit', compact('kycStatus'));
    }
    public function update(Request $request, $id){
        $kycStatus = KycStatus::findOrFail($id);
        $kycStatus->update([
            'status' => $request->input('status'),
        ]);
        return redirect()->route('master.kycstatus')->with('success', 'Data Updated successfully.');
    }
}
