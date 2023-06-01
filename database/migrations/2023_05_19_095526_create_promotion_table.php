<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->string('name');
            $table->bigIncrements('promo_Id');
            $table->string('desc',600);
            $table->string('luogo_di_fruizione',50);
            $table->string('metodo_di_fruizione',100);
            $table->string('date_start');
            $table->string('date_end');
            $table->Integer('price');
            $table->integer('discountPerc');
            $table->text('image')->nullable();
            $table->string('comp_name');
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
        Schema::dropIfExists('promotion');
    }
};