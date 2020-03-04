<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function Index()
    {
        return view('admin.login.index');
    }
    public function Logout()
    {
        Auth::logout();
        return redirect('/system/login');
    }
    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // return redirect('system/dashboard');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('system/dashboard');
        } else
            return redirect()->back()->with("msg", "Your email & password incorrect");
    }
}
