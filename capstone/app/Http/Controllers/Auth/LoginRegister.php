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
            $user = Auth::user();
            $welcomeMessage = 'Welcomeback, ' . ucfirst($user->usertype) . ' ' . $user->name . '!';
    
            return redirect()->route('index')->with('success', $welcomeMessage);
        }
    
        return redirect()->route('login')->with('error', 'Login details are not valid');
    }
    
    

    public function register()
    {
        return view('auth.register');
    }

    public function validate_register(Request $request)
{
    $request->validate([
        'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
        'usertype' => 'required|in:tenant,landlord',
    ]);
    
    $data = $request->all();

    $user = new User();
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->password = Hash::make($data['password']);
    $user->usertype = $data['usertype'];
    $user->save();

    Auth::login($user);
    
    $welcomeMessage = 'Welcome, ' . ucfirst($user->usertype) . ' ' . $user->name . '!';
    return redirect()->route('index')->with('success', $welcomeMessage);
}

public function logout()
{
    $user = Auth::user();

    Auth::logout();

    $farewellMessage = 'Come back again, ' . ucfirst($user->usertype) . ' ' . $user->name . '!';
    return redirect()->route('index')->with('success', $farewellMessage);
}

}
