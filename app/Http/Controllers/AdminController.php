<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        // Simple session check - in real app use proper middleware
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu!');
        }
        
        return view('admin.dashboard');
    }
    
    public function charts() {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.charts');
    }
    
    public function tables() {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.tables');
    }
    
    public function login() {
        return view('admin.auth.login');
    }
    
    public function loginProcess(Request $request) {
        // Simple demo login - in real app, use proper authentication
        $email = $request->input('email');
        $password = $request->input('password');
        
        // Demo credentials: admin@example.com / admin123
        if ($email === 'admin@example.com' && $password === 'admin123') {
            // In real app, use Laravel Auth or sessions
            session(['admin_logged_in' => true, 'admin_email' => $email]);
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
        }
        
        return back()->withErrors(['email' => 'Email atau password salah!'])->withInput();
    }
    
    public function logout() {
        session()->forget(['admin_logged_in', 'admin_email']);
        return redirect()->route('admin.login')->with('success', 'Logout berhasil!');
    }
    
    public function register() {
        return view('admin.auth.register');
    }
    
    public function forgotPassword() {
        return view('admin.auth.forgot-password');
    }
    
    public function error401() {
        return view('admin.errors.401');
    }
    
    public function error404() {
        return view('admin.errors.404');
    }
    
    public function error500() {
        return view('admin.errors.500');
    }
}