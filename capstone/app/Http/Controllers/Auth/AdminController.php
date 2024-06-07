<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        return view("auth.admin.login");
    }

    public function admin_validate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('index');
        } else {
            return back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function admin_logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            dd('Logged out successfully');
        } else {
            dd('No user logged in');
        }
    
        return redirect()->route('index');
    }
    
    
}
