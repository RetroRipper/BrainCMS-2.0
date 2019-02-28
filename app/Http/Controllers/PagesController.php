<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Http\Request;
	use App\Currency;
	use Illuminate\Support\Facades\Auth;
	
	class PagesController extends Controller
	{
		public function me()
		{
			return view('pages.me',[
				'users_currency_duckets' => Currency::users_currency('0')->amount,
				'users_currency_diamonds' => Currency::users_currency('5')->amount
			]);
		}
	}
