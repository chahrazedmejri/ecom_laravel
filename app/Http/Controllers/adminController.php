<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class adminController extends Controller
{
   
    use AuthenticatesUsers;

    public function __construct()
    {
            $this->middleware('guest:admin')->except('logout');
            
    }


    public function showAdminLoginForm()
    {
        return view('auth.loginadmin', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admindash');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->intended('/');


    }

    public function index()
    {
        
        $admins = Admin::latest()->paginate(555);

        return view('admindash', compact('admins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
   
 
    

    
    
        
}
