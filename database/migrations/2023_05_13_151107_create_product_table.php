<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('prodId');
            $table->string('name',70); 
            $table->float('price');
            $table->bigInteger('userId')->unsigned()->index();
            $table->foreign('userId')->references('userId')->on('user');
            $table->date('data_pubb'); //datapubblicazione
            $table->string('desc',1000); //descrizione
           // $table->bigInteger('catId')->unsigned()->index();
           // $table->foreign('catId')->references('catId')->on('category');
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
