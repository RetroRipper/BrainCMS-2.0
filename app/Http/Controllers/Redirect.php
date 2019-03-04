<?php

namespace App\Http\Controllers;

class Redirect extends Controller
{

    public function render()
    {
        if (Auth::check()) {
            return redirect('/me');
        } else {
            return view('index');
        }
    }

}
