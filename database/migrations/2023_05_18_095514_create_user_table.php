<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('userId')->unsigned()->index();
            $table->string('ruolo',10)->default('user');
            $table->string('name');
            $table->Integer('phone');
            $table->string('email');
            $table->string('conf_password')->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->Integer('age');
            $table->string('gender');
            $table->rememberToken();
           // $table->bigInteger('coupon_Id')->unsigned()->index();
           // $table->foreign('coupon_Id')->references('coupon_Id')->on('coupon'); //chiave esterna coupon

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};