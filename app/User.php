<?php
    
    namespace App;
    
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth;
    
    class User extends Authenticatable
    {
        use Notifiable;
        
        public $timestamps = false;
        
        protected $fillable = [
        'email', 'password', 'username', 'ip_register', 'ip_current', 'motto', 'last_login', 'account_created',
        ];
        
        protected $hidden = [
        'password', 'remember_token',
        ]; 
        
        public function currency ()
        {
            return $this->hasMany(UserCurrency::class, 'user_id');
        }
    }
