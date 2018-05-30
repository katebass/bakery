<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticable
{
    use Notifiable;

    protected $fillable = ['login', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
