<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailToUsers extends Migration
{

    public function up()
    {
        if(!Schema::hasColumn('users', 'mail'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('mail')->after('password');
            });
        } else if(Schema::hasColumn('users', 'email')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('email');
                $table->string('mail')->after('password');
            });
        }
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mail');
        });
    }
}
