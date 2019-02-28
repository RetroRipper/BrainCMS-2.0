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
    }
