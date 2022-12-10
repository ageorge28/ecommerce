<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminUserController extends Controller
{
    public function index()
    {
        $admins = Admin::where('type', 2)->latest()->get();
        return view('admin.roles.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('profile_photo_path');
        $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 225)->save('uploads/admin/' . $generated_image);

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'profile_photo_path' => $generated_image,
            'brands' => $request->brands,
            'categories' => $request->categories,
            'products' => $request->products,
            'slider' => $request->slider,
            'coupons' => $request->coupons,
            'shipping' => $request->shipping,
            'blog' => $request->blog,
            'settings' => $request->settings,
            'returns' => $request->returns,
            'reviews' => $request->reviews,
            'orders' => $request->orders,
            'stock' => $request->stock,
            'reports' => $request->reports,
            'users' => $request->users,
            'adminuserrole' => $request->adminuserrole,
            'type' => 2,
            'created_at' => Carbon::now()          
        ]);

        $notification = array (
            'message' => 'Admin User Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.adminuserrole')->with($notification);
    }

    public function edit(Admin $admin)
    {
        return view('admin.roles.edit', compact('admin'));
    }

    public function update(Admin $admin, Request $request)
    {

        if($request->file('profile_photo_path'))
        {
            unlink('uploads/admin/'. $admin->profile_photo_path);
            $image = $request->file('profile_photo_path');
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(225, 225)->save('uploads/admin/' . $generated_image);
            
            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'profile_photo_path' => $generated_image,
                'brands' => $request->brands,
                'categories' => $request->categories,
                'products' => $request->products,
                'slider' => $request->slider,
                'coupons' => $request->coupons,
                'shipping' => $request->shipping,
                'blog' => $request->blog,
                'settings' => $request->settings,
                'returns' => $request->returns,
                'reviews' => $request->reviews,
                'orders' => $request->orders,
                'stock' => $request->stock,
                'reports' => $request->reports,
                'users' => $request->users,
                'adminuserrole' => $request->adminuserrole,
                'type' => 2,
                'updated_at' => Carbon::now()
            ]);
        }
        else
        {
            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'brands' => $request->brands,
                'categories' => $request->categories,
                'products' => $request->products,
                'slider' => $request->slider,
                'coupons' => $request->coupons,
                'shipping' => $request->shipping,
                'blog' => $request->blog,
                'settings' => $request->settings,
                'returns' => $request->returns,
                'reviews' => $request->reviews,
                'orders' => $request->orders,
                'stock' => $request->stock,
                'reports' => $request->reports,
                'users' => $request->users,
                'adminuserrole' => $request->adminuserrole,
                'type' => 2,
                'updated_at' => Carbon::now()
            ]);
        }

        $notification = array (
            'message' => 'Admin User Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.adminuserrole')->with($notification);
    }

    public function destroy(Admin $admin)
    {
        unlink('uploads/admin/'. $admin->profile_photo_path);
        $admin->delete();
        
        $notification = array (
            'message' => 'Admin Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.adminuserrole')->with($notification);
    }
}
