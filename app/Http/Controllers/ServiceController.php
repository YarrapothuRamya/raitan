<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::orderBy('id', 'desc')->get();
        return view('master.service.index', compact('services'));
    }
    public function Add(){
        return view('master.service.add');  
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|unique:services|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500',
            'description' => 'required|string',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/service_images');
            $image->move($destinationPath, $name);
            $imagePath = $name;
            Services::create([
                'image' => $imagePath,
                'service_name' => $request->input('service_name'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
            ]);
            // return view('master.service.index')->with('success', 'Data Inserted successfully.');
            return redirect()->route('master.service')->with('success', 'Data Inserted successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload image.');
    }
    public function edit(Request $request, $id){
        $services = Services::where('id', $id)->get();
        return view('master.service.edit', compact('services'));
        // return view('master.service.add'); 
    }
    public function update(Request $request, $id){
        $services = Services::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/service_images');
            $image->move($destinationPath, $name);
            $imagePath = '/service_images/' . $name;
             $services->image = $name;
        }
        // exit;
        $services->update([
            'service_name' => $request->input('service_name'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
        ]);
        return redirect()->route('master.service')->with('success', 'Data Updated successfully.');
    }
    public function destroy($id)
    {
        $services = Services::findOrFail($id);
        $services->delete();
        return redirect('admin/services')->with('success', 'deleted successfully.');
    }
}
