<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCmsNews extends Migration
{
    public function up()
    {
        Schema::create('cms_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('image', 100);
            $table->text('description');
            $table->text('content');
            $table->integer('users_id')->index();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('rooms_id')->index()->nullable();
            $table->foreign('rooms_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cms_news');
    }
}
