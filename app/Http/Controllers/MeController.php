<?php
	
	namespace App\Http\Controllers;

	use App\UserCurrency;

	class MeController extends Controller {

		public function show() {
			return view('pages.me.show',[
				'users_currency_duckets' => UserCurrency::users_currency('0')->amount,
				'users_currency_diamonds' => UserCurrency::users_currency('5')->amount
			]);
		}
	}
