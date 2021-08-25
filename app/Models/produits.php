<?php

namespace App\Models;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    
    protected $table = 'produits';

    use HasFactory;
    protected $fillable =  ['id','nom','marque','categorie','sous_categ','prix','prix_promo','quant','def','image_path','status',];
   
    public function getprix()
    {
        $prix=$this->prix;
        $prixp=$this->prix_promo;
if($prixp==0)
{
    return $prix;

}
elseif($prixp > 0)
{
    $p= $prix * (1- $prixp/100) ;

    return $p;

}

    }


public function gettotal()
{
$prix= $this->gettot()+9;

return $prix;

}

public function gettot()
{
    $t=0;
    foreach(Cart::content() as $pr)
    {
        $t=$t+$pr->model->getprix() * $pr->qty;

    }
return $t;
}
public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
