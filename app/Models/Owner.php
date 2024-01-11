<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Owner extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'owner';
        protected $fillable = ['name','email','mobile','password',];
        protected $hidden = ['password', 'remember_token',];
}