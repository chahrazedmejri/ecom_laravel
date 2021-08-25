<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\order;
use App\Models\orderlivrer;
use App\Models\orderproducts;
use App\Models\produits;

use Illuminate\Http\Request;
use App\Models\ordersaffect;

class ordersaffecter extends Controller
{


  public function index()
  {
    
    $ordersaffecter = ordersaffect::latest()->paginate(500);
    foreach($ordersaffecter as $ordersaffecters)
    {
      if($ordersaffecters->etat=='livrè')
      {
    return view('sess_livreurs.listecommandelivrè', compact('ordersaffecter'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
      }
    }
  }

        public function affect()
        {
          
          $ordersaffecter = ordersaffect::latest()->paginate(255);
    
          return view('sess_livreurs.affectation', compact('ordersaffecter'));
             
        }
        
    public function show($id)
    {
        $ordersaffecter = ordersaffect::where('orderid',$id)->first();
    return view('sess_livreurs.userscommande')->with('ordersaffecter',$ordersaffecter);
  
    } 

    public function panier($id)
    {
      $orders = order::where('id',$id)->first();
    
          return view('sess_livreurs.panier')->with('orders',$orders);
     
    }
    
     public function livr_cmnd($id)
    {
    
      $ordersaffecter = ordersaffect::where('id',$id)->first();
      $ordersaffecter->etat='livrè';
      $ordersaffecter->save();

      $orders = order::where('id',$ordersaffecter->orderid)->first();

      
$orderlivrer = new orderlivrer ;
$orderlivrer->id = $orders->id;
$orderlivrer->user_id = $orders->user_id;
$orderlivrer->tel = $orders->tel;
$orderlivrer->adresse = $orders->adresse;
$orderlivrer->adresse2 = $orders->adresse2;
$orderlivrer->code = $orders->code;
$orderlivrer->ville = $orders->ville;
$orderlivrer->infosup = $orders->infosup;
$orderlivrer->quant = $orders->quant;
$orderlivrer->total = $orders->total;
$orderlivrer->produits=$orders->produits;

$orderlivrer->save();
$orders->delete();
$orderproducts = orderproducts::where('orderid',$orderlivrer->id)->first();

  $products= produits::where('id',$orderproducts->productid)->first();

  $q=$orderproducts->quant;

  $products->quant=$products->quant-$q;
  
  $update = [
    'quant' => $products->quant,
    ];
    $products->update($update);


      return redirect()->back()->with('success','la commande a été livré avec succès!');

    }
    

        
    public function cmnd_liv(){
      return view('sess_livreurs.commandelivrè');

      }
    
        
    public function cmnd_liv_cmnd($id)
    {

      $orderlivrers = orderlivrer::where('id',$id)->first();
    
          return view('sess_livreurs.cmnd')->with('orderlivrers',$orderlivrers);
     
      }














      public function destory(ordersaffect $ordersaffect,$id)
      {
        $ordersaffect = ordersaffect::where('orderid',$id)->first();
        ordersaffect::where('orderid',$id)->delete();

$update = [
  'etat' => 'Nonaffecter',
  ];
  order::where('id',$id)->update($update);

          return redirect()->back()
              ->with('success', "l'affectation a été annulé avec succès");
      }
}
