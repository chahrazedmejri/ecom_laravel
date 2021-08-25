<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Admin;

use Illuminate\Http\Request;

class registeradmin extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        
            $this->middleware('guest:admin');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.registeradmin', ['url' => 'admin']);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image_path'=>$request->image_path,
        ]);
        return redirect()->intended('/login/admin');
    }


}