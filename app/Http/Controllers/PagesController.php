<?php
	
	namespace App\Http\Controllers;

	use App\Currency;
	
	class PagesController extends Controller
	{
		public function me() {
			return view('pages.me',[
				'users_currency_duckets' => Currency::users_currency('0')->amount,
				'users_currency_diamonds' => Currency::users_currency('5')->amount
			]);
		}
	}
