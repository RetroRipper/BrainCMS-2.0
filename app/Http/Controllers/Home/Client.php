<?php
namespace App\Http\Controllers\Home;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class Client extends Controller
{

    public function render() {
        $sso = $this->generateSSO();
        Auth::user()->update([ "auth_ticket" => $sso ]);
        return view('pages.user.home.client', [ "sso" => $sso ]);
    }

    private function generateSSO() {
        return (string) Str::uuid();
    }

}