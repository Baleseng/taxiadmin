<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Chairman extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'chairman';
        protected $fillable = ['name', 'email','mobile','password',];
        protected $hidden = ['password', 'remember_token',];
}