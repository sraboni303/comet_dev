<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminLoginPage(){
        return view('admin.login');
    }

    public function showAdminRegisterPage(){
        return view('admin.register');
    }

    public function showAdminDashboardPage(){
        return view('admin.dashboard');
    }
}
