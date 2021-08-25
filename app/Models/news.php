<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{

    public function postedBy()
    {
       return $this->belongsTo('App\User');
    }
    protected $table = 'news';
    protected $fillable = ['newsContent', 'newsTitle', 'postedBy'];

}
