<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use Notifiable;

        protected $guard = 'admin';
        public $table = 'admins';

        protected $fillable = [
            'name', 'email', 'password','image_path',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
