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
            $table->bigIncrements('userId');
            $table->string('name',30);
            $table->string('username',30);
            $table->integer('phone',30);
            $table->foreign('couponId')->references('couponId')->on('coupon'); //chiave esterna coupon 
           // $table->string('type',20);  //indica il genere 
            $table->string('email',30);
            $table->string('status',30);
            $table->string('password',30);
            $table->integer('age',10);
            //$table->string('conf_password',20); //conferma password
            $table->string('gender',10);
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