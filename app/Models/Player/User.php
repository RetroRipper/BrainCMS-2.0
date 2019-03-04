<?php

namespace App\Models\Player;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use Notifiable;

    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = ['email', 'password', 'username', 'ip_register', 'ip_current', 'motto', 'last_login', 'account_created', 'auth_ticket'];
    protected $hidden = ['password', 'remember_token'];

    public function currency()
    {
        return $this->hasMany(Currency::class, 'user_id');
    }

}
