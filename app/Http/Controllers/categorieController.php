<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = categorie::latest()->paginate(255);

        return view('categories.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('categories.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'sous_categ' => 'required',
        ]);

        categorie::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'la categorie à été crée avec succès');
    }

 
    public function show(categorie $categorie)
    {
        return view('categories.show', compact('categorie'));
    }

    
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['categories'] = categorie::where($where)->first();
        return view('categories.edit', $data);    
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'sous_categ' => 'required',
            'created_at' => 'required'
        ]);

        
        $update = [
            'nom' => $request->nom,
            'sous_categ' => $request->sous_categ,
            'created_at' => $request->created_at
        ];

        categorie::where('id',$id)->update($update);
        return redirect()->route('categories.index')  ->with('success','Génial! la categorie à été modifié avec succès');
    }
    
        public function destroy($id)
        {
            categorie::where('id',$id)->delete();
            return redirect()->route('categories.index')  ->with('delete','la categorie à été supprimé avec succès!');
            }    
    }