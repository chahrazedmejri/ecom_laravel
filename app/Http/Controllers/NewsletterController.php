<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Newsletter;
class NewsletterController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Merci de vous être abonné ! :) ');
        }
        return redirect()->back()->with('failure', 'Sorry! vous êtes déjà abonné ');
            
    }








    public function edit($id)
    {
        $admins = Admin::where('id',$id)->first();

        return view('admins.edit');    
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required'   ,
            'email'=> 'required'   ]);

        
        $update = [
            'name' => $request->name,
            'email' => $request->email,
           'image_path' => $request->image_path
         ];

         Admin::where('id',$id)->update($update);


        
         
    return redirect()->back()->with('success2','votre profile a été modifé avec succès!');
    }






    
    public function changePasswordad(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::guard('admin')->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe que vous avez fourni. Veuillez réessayer .");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Le nouveau mot de passe ne peut pas être identique à votre mot de passe actuel. Veuillez choisir un autre mot de passe .");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::guard('admin')->user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Le mot de passe a été changé avec succès!");

    }







}
