<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFirstTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('number_of_teams')->default(16);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20)->unique();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('league_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('league_id')->references('id')->on('leagues');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('stadium', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->integer('club_id')->nullable()->unsigned();
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
