<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserPasswordController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('password.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = Auth::user();

        if(Hash::check($request->current_password, $user->password))
        {
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        }
        else 
        {
            $notification = array (
                'message' => 'Incorrect Current Password',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
