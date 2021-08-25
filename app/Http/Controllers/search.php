<?php

namespace App\Http\Controllers;
use App\Models\produits;
use App\Models\User;
use App\Models\livreurs;

use Illuminate\Http\Request;

class search extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $produits = produits::query()
            ->where('nom', 'LIKE', "%{$search}%")
            ->orWhere('marque', 'LIKE', "%{$search}%")
            ->orWhere('categorie', 'LIKE', "%{$search}%")
            ->orWhere('sous_categ', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('session_client.search', compact('produits'));
    }
public function search2(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $produits = produits::query()
        ->where('prix', 'LIKE', "%{$search}%")
        ->orWhere('prix_promo', 'LIKE', "%{$search}%")   
     
        ->get();

    // Return the search view with the resluts compacted
    return view('session_client.search', compact('produits'));
}



public function searchadmin(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $produits = produits::query()
        ->where('nom', 'LIKE', "%{$search}%")
        ->orWhere('marque', 'LIKE', "%{$search}%")
        ->orWhere('categorie', 'LIKE', "%{$search}%")
        ->orWhere('sous_categ', 'LIKE', "%{$search}%")
        ->get(); 
        
        $livreurs = livreurs::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->orWhere('region', 'LIKE', "%{$search}%")
        ->orWhere('tel', 'LIKE', "%{$search}%")
        ->orWhere('cin', 'LIKE', "%{$search}%")
        ->orWhere('addresse', 'LIKE', "%{$search}%")
        ->get(); 
        
        $users = User::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('session_admin.search', compact('produits','livreurs','users'));
}

public function searchliv(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $produits = produits::query()
        ->where('nom', 'LIKE', "%{$search}%")
        ->orWhere('marque', 'LIKE', "%{$search}%")
        ->orWhere('categorie', 'LIKE', "%{$search}%")
        ->orWhere('sous_categ', 'LIKE', "%{$search}%")
        ->get(); 
        
        
        $users = User::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('sess_livreurs.search', compact('produits','users'));
}






}