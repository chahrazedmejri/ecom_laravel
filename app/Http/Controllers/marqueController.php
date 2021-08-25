<?php

namespace App\Http\Controllers;

use App\Models\marque;
use Illuminate\Http\Request;

class marqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $marques = marque::latest()->paginate(255);

        return view('marques.index', compact('marques'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('marques.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        marque::create($request->all());

        return redirect()->route('marques.index')
            ->with('success', 'la marque à été crée avec succée!');
    }

 
    public function show(marque $marque)
    {
        return view('marques.show', compact('marque'));
    }

    
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['marques'] = marque::where($where)->first();
        return view('marques.edit', $data);    
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'created_at' => 'required'
        ]);

        
        $update = [
            'nom' => $request->nom,
            'created_at' => $request->created_at
        ];

        marque::where('id',$id)->update($update);
        return redirect()->route('marques.index')  ->with('success','Gènial ! la marque à étet modifié avec succée');
        }
    
    public function destroy(marque $marque)
    {
        $marque->delete();

        return redirect()->route('marques.index')
            ->with('delete', 'la marque à été spprimé avec succée!');
    }
}