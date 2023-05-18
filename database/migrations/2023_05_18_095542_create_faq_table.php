<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2023_05_13_151139_create_faq_table.php
=======

>>>>>>> b145dcec6724c9a7d60fb7097ce41710676d6ad9:database/migrations/2023_05_18_095542_create_faq_table.php
            $table->bigIncrements('faq_Id');
            $table->string('question');
            $table->string('answer', 700);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
};