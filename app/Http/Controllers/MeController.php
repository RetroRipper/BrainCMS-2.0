<?php
	
	namespace App\Http\Controllers;

	use App\Currency;
	
	class MeController extends Controller {

		public function show() {
			return view('pages.me.show',[
				'users_currency_duckets' => Currency::users_currency('0')->amount,
				'users_currency_diamonds' => Currency::users_currency('5')->amount
			]);
		}
	}
