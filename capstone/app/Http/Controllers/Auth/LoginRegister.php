<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class LoginRegister extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    
    public function validate_login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('landingpage');
        }

        return redirect()->route('/')->with('error', 'Login details are not valid');
    }


    public function register()
    {
        // if (Auth::check()) {
        //     return redirect()->route('/landingpage');
        // }
        return view('auth.register');
    }

    public function validate_register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        
        $data = $request->all();

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);
        return redirect()->route('/login')->with('success', 'Registration completed. Welcome to the dashboard!');
    }
}
