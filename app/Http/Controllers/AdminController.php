<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }
        return redirect('/admin')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard.index');
        }
        return redirect('/admin')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
