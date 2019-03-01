<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable {

        use Notifiable;

        public $timestamps = false;

        protected $fillable = [
        'email', 'password', 'username', 'ip_register', 'ip_current', 'motto', 'last_login', 'account_created', 'auth_ticket',
        ];

        protected $hidden = [
        'password', 'remember_token',
        ];

        protected $table = 'users_currency';

        protected $primaryKey = 'user_id';

        public function currency (){
            return $this->hasMany(User::class, 'user_id')->select('amount','type');
        }
    }
