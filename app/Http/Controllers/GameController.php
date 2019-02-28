<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;
	
	
	class GameController extends Controller
	{
		public function client() {
			$sso = $this->generateSSO();
            Auth::user()->update([ "auth_ticket" => $sso ]);
			return view('pages.client.show', [ "sso" => $sso ]);
		}
		
		private function generateSSO() {
            return (string) Str::uuid();
		}
	}
