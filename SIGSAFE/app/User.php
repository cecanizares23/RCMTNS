<?php

namespace fincavicola;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','username','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function setPasswordAttribute($password)
    {
    $this->attributes['password'] = bcrypt($password);
    }
    
    protected $hidden = [
        'remember_token',
    ];
}
