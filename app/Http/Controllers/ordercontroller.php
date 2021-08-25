<?php

namespace App\Http\Controllers;
use models\Cart as CartModel;
use App\Models\User;
use App\Models\order;
use App\Models\ordersaffect;
use App\Models\livreurs;
use App\Models\orderproducts;
use App\Models\orderlivrer;

use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function index()
    {
      
      $orders = order::latest()->paginate(500);

      return view('session_client.listecommande', compact('orders'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    
    public function show($id)
    {
        $orders = order::where('id',$id)->first();
    return view('session_client.userscommande')->with('orders',$orders);
  
    } 
    
    public function show2($id)
    {
        $orderlivrers = orderlivrer::where('id',$id)->first();
    return view('sess_livreurs.userscommande2')->with('orderlivrers',$orderlivrers);
  
    } 
       
       
    public function panier($id)
    {
      $orders = order::where('id',$id)->first();
    
          return view('session_client.panier')->with('orders',$orders);
     
    } 
    
    public function panier2($id)
    {
      $orderlivrers = orderlivrer::where('id',$id)->first();
    
          return view('session_client.panier2')->with('orderlivrers',$orderlivrers);
     
    } 

    public function store(Request $request){

      $this->validate($request, [
        'adresse' => 'required|max:255',
        'tel' => 'required|max:8',
        'code' => 'required|max:4|min:4',
      ]);
     

$orders = new order;

$orders->user_id = Auth::user()->id;
$orders->tel = $request->tel;
$orders->adresse = $request->adresse;
$orders->adresse2 = $request->adresse2;
$orders->code = $request->code;
$orders->ville = $request->ville;
$orders->infosup = $request->infosup;
$orders->quant = Cart::count();
foreach (Cart::content() as $produits)
{
  $subtotal =$produits->model->gettotal();

}

$orders->total = $subtotal;
$orders->produits=Cart::Content();
$orders->etat='Nonaffecter';
if($orders->quant>0)
{
  $orders->save();

}

foreach(Cart::Content() as $item)
{
  orderproducts::Create([
    'orderid'=> $orders->id,
    'productid'=>$item->model->id,
    'name'=>$item->name,
    'quant'=>$item->qty,
    'price'=>$item->model->getprix() * $item->qty 
  ]);
}
Session::forget('cart');

$orderscmd = order::where('id',$orders->id)->first();

        return view('session_client.commande-recu')->with('orderscmd',$orderscmd);
      }



      public function edit($id)
      {
          $orderss = order::where('id',$id)->first();
          return view('session_client.update')->with('orderss',$orderss);
      }


      public function update(Request $request, $id)
      {
          $request->validate([
            'adresse' => 'required|max:255',
            'tel' => 'required|max:8',
            'code' => 'required',
          ]);
          $update = [

          'tel' => $request->tel,

          'adresse' => $request->adresse,

          'code' => $request->code,

          'ville' => $request->ville
          ];
          order::where('id',$id)->update($update);

          return redirect('panier')->with('success','Votre Commande a été modifié avec succès, vous recevrez bientôt un email!');
          }





        public function showaffectlist($id)
        {
            $orders = order::where('id',$id)->first();

            $livreurs = livreurs::latest()->paginate(255);

        return view('sess_livreurs.show',compact('livreurs'))->with('orders',$orders);
      
        } 
              
      
    public function affectcmnd($id ,request $request){
      $orders = order::where('id',$id)->first();
$orderid=$id;

$ordersaffecter = new ordersaffect;

  $ordersaffecter->orderid= $orderid;
  $ordersaffecter->livreur= $request->livreur;
  $livreurs = livreurs::latest()->paginate(255);
foreach($livreurs as $livreurs)
{
  if($livreurs->name==$ordersaffecter->livreur)
{
  $ordersaffecter->livreurid=$livreurs->id;

}
$ordersaffecter->etat='En-cours';
}
  $ordersaffecter->save();

$update = [

  'etat' => 'affect',
  ];
  order::where('id',$id)->update($update);
    $orders = order::latest()->paginate(255);

    return view('session_client.listecommande', compact('orders'))
    ->with('success','la commande a été affecté avec succès!')->with('orders',$orders);

      }



    

}
