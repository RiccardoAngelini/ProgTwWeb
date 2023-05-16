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
           $table->bigInteger('catId')->unsigned()->index();
            $table->foreign('catId')->references('catId')->on('category'); 
            $table->bigInteger('userId')->unsigned()->index(); 
            $table->foreign('userId')->references('userId')->on('user');  
        
           //$table->string('type',200);
            $table->float('price');
            $table->date('data_pubb'); //datapubblicazione
            $table->string('desc',1000); //descrizione
           
           
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
