<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        
        $notification = array (
            'message' => 'User Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }
}
