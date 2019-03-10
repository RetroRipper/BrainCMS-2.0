<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class Me extends Controller
{

    public function render ()
    {
        return view('pages.user.home.me', [
            'user'     => auth()->user(),
            'currency' => auth()->user()->currency
        ]);
    }

}