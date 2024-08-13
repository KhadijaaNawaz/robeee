<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function superAdmin()
    {
        // Logic for super admin users
        return view('admin_users.super_admin');
    }

    public function subAdmin()
    {
        // Logic for sub-admin users
        return view('admin_users.sub_admin');
    }

    public function manager()
    {
        // Logic for manager users
        return view('admin_users.manager');
    }

    public function sales()
    {
        // Logic for sales users
        return view('admin_users.sales');
    }
}

