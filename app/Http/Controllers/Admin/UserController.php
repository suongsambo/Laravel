<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;

class UserController extends Controller
{
    public function Index()

    {
        $list_user =  User::orderBy('id', 'desc')->get();
        // $list_user =  User::orderBy('id', 'desc')->take(1)->get();  order and take 1 value
        // $list_user =  User::WHERE('role', 'admin')->orderBy('id', 'desc')->get(); select where role= admin and order
        $data = array(
            "list_users" => $list_user
        );
        return view('admin.users.index', $data);
    }
    // Create from user
    public function Create()
    {

        return view('admin.users.create');
    }
    public function Store(Request $request)

    {

        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:2|max:8',
            'conform_password' => 'required|same:password',
            'phone' => 'required|numeric',
            'name' => 'required|string',
        ]);

        $path = "profile/avatar/profile.png";
        if ($request->file('profile') != null) {
            $path =  $request->file('profile')->store('profile/avatar');
        }
        $user = new User;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->conform_password = $request->conform_password;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->profile = $path;
        $user->save();
        return redirect('/system/user');
    }
}
