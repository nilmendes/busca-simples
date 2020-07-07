<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Query Scope

    public function scopeName($query, $name)
     {
         if($name)
            return $query->where('name', 'like', "%$name%");
     }

     public function scopeEmail($query, $email)
     {
         if($email)
            return $query->where('email', 'like', "%$email%");
     }

     public function scopeBio($query, $bio)
     {
         if($bio)
            return $query->where('bio', 'like', "%$bio%");
     }
}
