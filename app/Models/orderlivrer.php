<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderlivrer extends Model
{
    use HasFactory;
    protected $dates = ['expired_at'];

    protected $table = 'orderlivrer';

    public function user()
    {
    return $this->belongsTo('App\Models\User');
    }

    public function orderproducts()
    {
    return $this->belongsTo('App\Models\orderproducts');
    }

    public function orderaffect()
    {
    return $this->belongsTo('App\Models\orderaffect');
    }

    
    protected $fillable = [
        'price',
        'qty',
        'name',
        'marque'
    ];
    

    
}
