<?php
namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;

class News extends Controller
{

    public function render ()
    {
        return view('pages.user.articles.news');
    }

}