<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Auth;
	
	class Currency extends Model {

		public static function users_currency($type) 
        {
			return $amount = DB::table('users_currency')
            ->select('amount')
            ->where('user_id', Auth::user()->id)
            ->where('type', $type)->first();
		}
	}
