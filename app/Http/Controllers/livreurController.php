<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
use App\Models\Admin;

use App\Models\livreurs;
use Illuminate\Http\Request;

class livreurController extends Controller
{
       
    public function index()
    {
        
        $livreurs = livreurs::latest()->paginate(255);

        return view('livreurs.index', compact('livreurs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 

    public function show(livreurs $livreurs)
    {        return view('livreurs.show', compact('livreurs'));

    } 
  
    public function create()
    {
    return view('auth.registerlivreur');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'image_path' => 'required',
        'region' => 'required',
        'addresse' => 'required',
        'tel' => 'required',
        'cin' => 'required'
    ]);
    $livreurs = new livreurs;
    $livreurs->name = $request->name;
    $livreurs->email = $request->email;
    $livreurs->password = $request->password;
    $livreurs->image_path = $request->image_path;
    $livreurs->region = $request->region;
    $livreurs->addresse = $request->addresse;
    $livreurs->tel = $request->tel;
    $livreurs->cin = $request->cin;
    $livreurs->save();
    return redirect()->route('livreurs.index') ->with('success2','le livreur a été créé avec succès');
    }

    public function edit($id)
    {

        $where = array('id' => $id);
        $data['livreurs'] = livreurs::where($where)->first();
        return view('livreurs.edit', $data);       }
        
    public function edit2($id)
    {

        $where = array('id' => $id);
        $data['livreurs'] = livreurs::where($where)->first();
        return view('livreurs.edit2', $data);       }

    public function update(Request $request,$id)
    {
                  
        $request->validate([
            'name' => 'required'        ]);

        
        $update = [
            'name' => $request->name,
            'email' => $request->email,
           'image_path'=> $request->image_path,
            'region' => $request->region,
            'addresse' => $request->addresse,
            'cin' => $request->cin,
            'tel' => $request->tel
         ];

           livreurs::where('id',$id)->update($update);
         

    return redirect()->back()->with('success2','Le profile a été modifé avec succès!');
    }
 

 
  
    public function destroy($id)
    {
        livreurs::where('id',$id)->delete();
        return redirect()->route('livreurs.index')  ->with('delete','le livreur a été supprimé avec succès');
        }    


        
    public function changePasswordliv(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::guard('livreur')->user()->password))) {
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
        $user = Auth::guard('livreur')->user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Le mot de passe a été changé avec succès!");

    }
}
