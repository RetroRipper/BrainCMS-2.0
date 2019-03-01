<?php
	
	namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Auth;

	class MeController extends Controller {

        public function show() {
            return view('pages.me.show', [
                'currency' => Auth::user()->currency()->get()
            ]);
        }
	}
