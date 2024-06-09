<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin_login()
    {
        return view("auth.admin.login");
    }

    public function dashboard()
    {
        if (Auth::guard('admin')->check()) {
        return view("dashboard.dashboard");
         } else {
        return redirect()->route('admin_login')->with('error', 'Please login first to access the admin section.');
    }
    }

    public function admin()
{
    if (Auth::guard('admin')->check()) {
        return view("page.admin");
    } else {
        return redirect()->route('admin_login')->with('error', 'Please login first to access the admin section.');
    }
}

    public function admin_validate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
       if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin');
        }
    
        return redirect()->route('admin_login')->with('error', 'Invalid email or password');
    }
    

        

    public function admin_logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin_login');
    }
}