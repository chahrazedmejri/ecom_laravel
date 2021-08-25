<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    use HasFactory;
    
	public $table = 'contact_us';
	 
	public $fillable = ['name','tel','email','subject','message'];
}
