<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    
    public function login(Request $request)
    {
    $credentials = $request->only('loginUsername', 'loginPassword');
    $user = User::where('nama_user', $credentials['loginUsername'])->first();

    if ($user && Hash::check($credentials['loginPassword'], $user->password)) {
        Auth::login($user);
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('user')->with('error', 'Username atau password salah.');
    }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}