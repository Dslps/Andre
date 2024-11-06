<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout(); 

        $request->session()->invalidate();  
        $request->session()->regenerateToken(); 

        return redirect('/'); 
    }
}
