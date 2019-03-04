<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailToUsers extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email');
        });
        DB::statement('ALTER TABLE users MODIFY COLUMN `mail` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `password`;');
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email');
        });
        DB::statement('ALTER TABLE users MODIFY COLUMN `mail` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT NULL AFTER `password`;');
    }
}
