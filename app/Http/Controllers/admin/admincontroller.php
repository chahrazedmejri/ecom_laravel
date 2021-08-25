<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
public function dashboard() 
{
return view('admin.admin_dashboard');
}

public function login() 
{
return view('admin.admin_login');
}

}