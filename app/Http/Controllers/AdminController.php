<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('adminlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password','remember_token');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }
}
