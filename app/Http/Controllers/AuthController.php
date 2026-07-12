<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $validatedNewUser = $request->validate([
            'name' => 'string|max:255|required',
            'email' => 'email|unique:users,email|required',
            'password' => 'required|confirmed|min:8',
        ]);
        $validatedNewUser['password'] = Hash::make($validatedNewUser['password']);
        $user = User::create($validatedNewUser);
        Auth::login($user);
        return redirect('/');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
    }
}
