<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderproducts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'orderid',
        'quant',
        'price',
        'name',
        'productid'
    ];


    public function orders()
{
return $this->hasMany('App\Models\order');
}



public function orderslivr()
{
return $this->hasMany('App\Models\orderlivrer');
}

public function orderaffect()
{
return $this->belongsTo('App\Models\orderaffect');
}


}
