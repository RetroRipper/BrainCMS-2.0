<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\DB;
	
	
	class GameController extends Model
	{
		public function client()
		{
			
			$SSO = $this->generateSSO();
			DB::table('users')->where('id', Auth::user()->id)->update(['auth_ticket' => $SSO]);
			return view('pages.client', ['SSO' => $SSO]);

		}
		
		private function generateSSO() {
			
			return 'Brain-2.0-'.substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 25).'-SSO';
			
		}
	}
