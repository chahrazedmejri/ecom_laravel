<?php

namespace App\Http\Controllers;
use App\Models\produits;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
{
    return view ('cart.index');
}



    public function store(Request $request)
 {        
      $duplicata = Cart::search(function ($cartItem, $rowId) use($request) {
        return $cartItem->id == $request->product_id;   });

    if( $duplicata->isNotEmpty())
    {
        return redirect()->back()->with('success','Cher client, Ce produit a déjà été ajouté à votre panier . Pour modifier la quantité, veuillez consulter votre panier  ');
    }

        $produits = produits::find($request->product_id);
if($produits->prix_promo == 0)
{
    Cart::add($produits->id,$produits->nom,1,$produits->prix)->associate('App\Models\produits');

}
else
{
    Cart::add($produits->id,$produits->nom,1,$produits->prix_promo)->associate('App\Models\produits');

}
       
        return redirect()->back()->with('success','Le produit a été Bien ajouté à votre panier.');

    }

    public function updateCart(Request $request){
        
        $rowId = $request->id;
        $newQuantity = $request->quantity;

        Cart::update($rowId, $newQuantity);
        
        $cart = Cart::content();
        //dd($cart);
        return view('cart.index')->with('cart-success', 'Cart updated');
    }
   

    public function destroy($rowId)
{

Cart::remove($rowId);
return redirect()->back()->with('success3','Le produit a été supprimé.');


}

}
