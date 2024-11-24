<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChangepasswordController extends Controller
{
    public function edit()
    {
        if (Auth::guard('web')->check()) {
            $user =  Auth::guard('web')->user();
            return view('master.password.edit', compact('user'));
        }
    }
    public function update(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15', // Adjust as needed
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed', // Validates that new_password matches new_password_confirmation
        ]);

        // Check if the current password is correct
        if (!Auth::guard('web')->validate(['email' => Auth::user()->email, 'password' => $request->current_password])) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update user details
        $user = Auth::user();
        $user->name = $validatedData['name'];
        $user->mobile = $validatedData['mobile'];
        $user->password = bcrypt($validatedData['new_password']); // Hash the new password
        $user->save();

        return redirect()->route('master.password')->with('success', 'Password updated successfully.');
    }

}
