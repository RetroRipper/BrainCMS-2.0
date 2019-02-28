<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Support\Facades\Auth;
	
	
	class GameController extends Controller
	{
		public function client()
		{
			
			$sso = $this->generateSSO();
            Auth::user()->update([ "auth_ticket" => $sso ]);
			return view('pages.client', [ "sso" => $sso ]);

		}
		
		private function generateSSO() {
			
			return 'Brain-2.0-'.substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 25).'-SSO';
			
		}
	}
