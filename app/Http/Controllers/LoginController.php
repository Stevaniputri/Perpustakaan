<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class LoginController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'password' => 'required|min:6',
        ]);
        
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'is_role' => 0
        ]);
        return redirect('/login')->with('success', 'Your account has been created. Please Login');
    }

    public function auth(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $request->only(['email', 'password']);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if (auth()->user()->is_role == false) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/dashboard-admin');
            }
        }
    }

    public function logout()
    {
        //halaman logout
        Auth::logout();
        return redirect('/');
    }
}
