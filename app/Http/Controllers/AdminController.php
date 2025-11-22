<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }
    
    public function charts() {
        return view('admin.charts');
    }
    
    public function tables() {
        return view('admin.tables');
    }
    
    public function login() {
        return view('admin.auth.login');
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