<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        return view('admin.profile.index', compact('admin'));

    }

    public function edit()
    {
        $admin = Auth::user();
        return view('admin.profile.edit', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => [
                            'required',
                            'email:rfc,dns',
                            Rule::unique('admins', 'email')->ignore($admin->email, 'email')
            ]
        ]);
        $admin->name = $request->name;
        $admin->email = $request->email;

        if($request->file('profile_photo_path'))
        {
            $file= $request->file('profile_photo_path');
            unlink(public_path('uploads/admin/') . $admin->profile_photo_path);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/admin/'), $filename);
            $admin->profile_photo_path = $filename; 
        }

        $admin->save();

        $notification = array (
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }
}
