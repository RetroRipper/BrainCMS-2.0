<?php
namespace App\Http\Controllers\Home;

use Auth;
use App\Http\Controllers\Controller;

class Me extends Controller
{

    public function render ()
    {
        return view('pages.user.home.me', [
            'currency' => Auth::user()->currency
        ]);
    }

}