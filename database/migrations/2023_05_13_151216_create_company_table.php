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
            $table->bigIncrements('compId');
            $table->string('name',50);
            $table->bigInteger('userId')->unsigned()->index();
            $table->foreign('userId')->references('userId')->on('user');
            $table->bigInteger('promoId')->unsigned()->index();  
            $table->foreign('promoId')->references('promoId')->on('promotion');  
            $table->string('location',50);
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