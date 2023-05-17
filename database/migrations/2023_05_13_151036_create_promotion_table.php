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
            $table->bigIncrements('promo_Id');
            $table->string('cod_promo',50);
            $table->bigInteger('coupon_Id')->unsigned()->index();
            $table->foreign('coupon_Id')->references('coupon_Id')->on('coupon'); //chiave esterna coupon
            $table->date('date_start');
            $table->date('date_end');
            $table->Integer('price');
            $table->integer('discountPerc');
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
        Schema::dropIfExists('promotion');
    }
};