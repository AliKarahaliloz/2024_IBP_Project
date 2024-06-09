<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
        

    }
    
    public function login(Request $request)
    { 
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('userpage');
        }

        return redirect()->back()->with('error', 'Invalid username or password.');
    }





    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Form verilerini doğrulama
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Yeni kullanıcı oluşturma
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Kayıt olduktan sonra kullanıcıyı giriş yapmaya yönlendir
        auth()->login($user);

        // Başarılı kayıt olduğunda, ana sayfaya yönlendir
        return redirect('/userpage');
    }



}