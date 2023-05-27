<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }
        return redirect('/admin/login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {
        if (auth()->check()) {
            return view('dashboard.index');
        }
        return redirect('/admin/login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/admin');
    }
}
