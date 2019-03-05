<?php

namespace App\Models\Player;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use Notifiable;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username',
        'password',
        'mail',
        'auth_ticket',
        'rank',
        'rank_vip',
        'credits',
        'vip_points',
        'activity_points',
        'look',
        'gender',
        'motto',
        'ip_last',
        'ip_reg'
    ];

    /**
     * The attributes that are hidden while returning the object as an array or JSON
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'auth_ticket'
    ];

    public function currency()
    {
        return $this->hasMany(Currency::class, 'user_id');
    }

}
