<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email'); 
            $table->string('username',20);
            $table->string('surname', 20);
            $table->string('role',10)->default('user');
            $table->integer('age')->nullable();
            $table->string('gender');
            $table->bigInteger('phone');
            $table->string('password');  
            $table->timestamp('email_verified_at')->nullable();
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

