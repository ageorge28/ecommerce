<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => [
                            'required',
                            'email:rfc,dns',
                            Rule::unique('users', 'email')->ignore($user->email, 'email')
            ]
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if($request->file('profile_photo_path'))
        {
            $file= $request->file('profile_photo_path');
            if(!empty($user->profile_photo_path))
            {
                unlink(public_path('uploads/user/') . $user->profile_photo_path);
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/user/'), $filename);
            $user->profile_photo_path = $filename; 
        }

        $user->save();

        $notification = array (
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }
}
