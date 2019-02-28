<?php
	
	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;


	class ClientController extends Controller
	{
		public function show() {
			$sso = $this->generateSSO();
            Auth::user()->update([ "auth_ticket" => $sso ]);
			return view('pages.client.show', [ "sso" => $sso ]);
		}

		private function generateSSO() {
            return (string) Str::uuid();
		}
	}
