<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::latest()->paginate(555);

        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index2()
    {
        
        $users = User::latest()->paginate(555);

        return view('layouts.app', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');

    }
    public function create2()
    {
        return view('users.edit');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required'
        ]);

        User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));

    }

    
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['users'] = User::where($where)->first();
        return view('users.edit', $data);

    }
    public function historique($id)
    {
        $where = array('id' => $id);
        $data['users'] = User::where($where)->first();
        return view('users.historique', $data);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'name'=> 'required',
        'email'=> 'required'
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();
        return redirect()->route('users.edit',$users->id)->with('success','Génial! votre compte modifié avec succès ');
        }
    
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'user deleted successfully');
    }


}
