<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class livreurs extends Authenticatable
{
    use HasFactory;
    
    use Notifiable;

        protected $guard = 'livreur';

    protected $table = 'livreurs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'email', 'password','image_path','tel','cin','region','addresse',
    ];

    
public function orderaffect()
{
return $this->belongsTo('App\Models\orderaffect');
}

}