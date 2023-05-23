<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('comp_Id');
            $table->string('name',50);
           // $table->bigInteger('userId')->unsigned()->index();
           // $table->foreign('userId')->references('id')->on('users');
            $table->bigInteger('promo_Id')->unsigned()->index();  
            $table->foreign('promo_Id')->references('promo_Id')->on('promotion')->onDelete('CASCADE');  
            $table->string('location',50);
            $table->text('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
};