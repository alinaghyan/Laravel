<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->string('username');
            $table->string('password');
            $table->bigInteger('code_melli')->unique();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->integer('gender')->defualt('1');
            $table->bigInteger('mobile')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();        
            $table->string('user_type')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
