<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/me';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRegister()
    {
        return view('pages.guest.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
			'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
			'motto' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
			'username' => $data['username'],
            'password' => Hash::make($data['password']),
			'motto' => $data['motto'],
			'ip_register' => request()->ip(),
			'ip_current' => request()->ip(),
			'last_login' => Carbon::now()->timestamp,
            'account_created' => Carbon::now()->timestamp
        ]);
    }
	const created_at = null;
}
