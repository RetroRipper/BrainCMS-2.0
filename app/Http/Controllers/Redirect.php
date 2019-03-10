<?php

namespace App\Http\Controllers;

class Redirect extends Controller
{

    public function render()
    {
        if (auth()->user())
        {
            return redirect('/me');
        }
        else {
            return redirect('/login');
        }
    }

}
