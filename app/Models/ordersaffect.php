<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersaffect extends Model
{
    use HasFactory;
public $table = 'ordersaffecter';


    protected $fillable = [
        'id',
        'orderid',
        'livreurid',
        'livreur'
    ];




    
    public function orders()
{
return $this->hasMany('App\Models\order');
}
  
public function orderslivrer()
{
return $this->hasMany('App\Models\orderlivrer');
}

public function orderproducts()
{
return $this->hasMany('App\Models\orderproducts');
}


public function livreurs()
{
return $this->hasMany('App\Models\livreurs');
}


}
