<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\produits;
use App\Models\Rating;
class produitsController extends Controller
{ /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
 
        public function index()
        {
        $data['produits'] = produits::orderBy('id','desc')->paginate(255);
        return view('produits.index', $data);
        }
        public function index2()
        {
            $data['produits'] = produits::orderBy('id','desc')->paginate(255);
            return view('produits.listproduits', $data);
        }
      



        public function show($id)
        {
            $produits = produits::where('id',$id)->first();
        return view('session_client.details')->with('produits',$produits);
        }  


        public function showavis($id)
        {
            $rating = Rating::where('product_id',$id)->get();
            
        return view('produits.avis')->with('rating',$rating);
        } 
      
      

    
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
        return view('produits.create');
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
  
            'nom' => 'required',
            'marque' => 'required',
            'categorie' => 'required',
            'sous_categ' => 'required',
            'prix' => 'required',
            'prix_promo' => 'required',
            'quant' => 'required',
            'image_path' => 'required',
            'status' => 'required'
        ]);
        $produits = new produits;
        $produits->nom = $request->nom;
        $produits->marque = $request->marque;
        $produits->categorie = $request->categorie;
        $produits->sous_categ = $request->sous_categ;
        $produits->prix = $request->prix;
        $produits->prix_promo = $request->prix_promo;
        $produits->quant = $request->quant;
        $produits->def = $request->def;
        $produits->image_path = $request->image_path;
        $produits->status = $request->status;
        $produits->save();
        return redirect()->route('produits.index')
        ->with('success','Génial! le produit a été créé avec succès.');
        }
    
      
        public function edit($id)
        {
            $where = array('id' => $id);
        $data['produits'] = produits::where($where)->first();
        return view('produits.edit', $data);
}

        public function update(Request $request, $id)
        {
        $request->validate([
            'nom' => 'required',
            'marque' => 'required',
            'categorie' => 'required',
            'sous_categ' => 'required',
            'prix' => 'required',
            'prix_promo' => 'required',
            'quant' => 'required',
            'def' => 'required',
            'image_path' => 'required',
            'status' => 'required'
        ]);
        $update = [
        'nom' => $request->nom,
        'marque' => $request->marque,
        'categorie'  => $request->categorie,
        'sous_categ'  => $request->sous_categ,
        'prix' =>  $request->prix,
       'prix_promo'  => $request->prix_promo,
        'quant'  => $request->quant,
        'def'  => $request->def,
       'image_path'  => $request->image_path,
        'status'  => $request->status
        ];

        produits::where('id',$id)->update($update);
        return redirect()->route('produits.index')  ->with('success','votre produit a été modifié avec succès.');
        }
     
      
        public function destroy($id)
        {
            produits::where('id',$id)->delete();
            return redirect()->route('produits.index')  ->with('delete','le produit a été supprimé avec succès!');
            }        
 }