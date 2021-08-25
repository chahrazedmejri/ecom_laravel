<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Models\livreurs;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
            $this->middleware('guest:livreur')->except('logout');
            
    }



     public function showlivreurLoginForm()
    {
        return view('auth.loginlivreur', ['url' => 'livreur']);
    }

    public function livreurLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('livreur')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) 
            {

            return redirect()->intended('/livreur');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
  


    public function logout(Request $request)
    {
        Auth::guard('livreur')->logout();
        return redirect()->intended('login/livreur');


    }

   
}