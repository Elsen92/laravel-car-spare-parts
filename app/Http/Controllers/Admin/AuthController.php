<?php

namespace App\Http\Controllers\Admin;namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Giriş səhifəsini göstər
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Giriş funksiyası
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Email və şifrə ilə doğrulama
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {

                Auth::logout();
                return back()->with('error', 'Sizin admin icazəniz yoxdur!');
            }
        }


        return back()->with('error', 'Email və ya şifrə yanlışdır!');
    }

    // Çıxış funksiyası
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}


