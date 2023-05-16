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
            $table->string('role',10)->default('public');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->timestamp('conf_password')->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->Integer('age');
            $table->string('gender');
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