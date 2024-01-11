<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Marshall extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'marshall';
        protected $fillable = ['name', 'email','mobile','password',];
        protected $hidden = ['password', 'remember_token',];
}
