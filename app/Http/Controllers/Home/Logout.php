<?php
namespace App\Http\Controllers\Home;

use Auth;
use App\Http\Controllers\Controller;

class Logout extends Controller
{

    public function render()
    {
        Auth::logout();
        return redirect('/');
    }

}