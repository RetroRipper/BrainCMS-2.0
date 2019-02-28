<?php
	
	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\Auth;
	
	class IndexController extends Controller {

		public function show() {
			if(Auth::check()) {
				return redirect('/me');
				} else {
				return view('index');
			}
		}
	}
