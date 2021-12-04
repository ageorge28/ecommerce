<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminProfileController extends Controller
{
    public function index()
    {
        $admin = Admin::first();
        return view('admin.profile.index', compact('admin'));

    }

    public function edit()
    {
        $admin = Admin::first();
        return view('admin.profile.edit', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Admin::first();

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
