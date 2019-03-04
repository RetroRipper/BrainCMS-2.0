<?php
	
	namespace App\Http\Controllers\Auth;

    use Auth;
    use App\Http\Controllers\Controller;
	use Illuminate\Foundation\Auth\AuthenticatesUsers;

	class LoginController extends Controller
	{
		
		use AuthenticatesUsers;

		protected $redirectTo = '/me';

		public function __construct()
		{
			$this->middleware('guest')->except('logout');
		}

        public function showLoginForm()
        {
            return view('pages.guest.login');
        }

	}
