<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{

    protected $table = 'cms_news';
    public $timestamps = false;

    protected $fillable = [];

}