<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo_image');
            $table->string('small_logo_image')->nullable();
            $table->string('title_top');
            $table->string('description');
            $table->string('keywords');
            $table->string('wordtime')->nullable();
            $table->string('tel')->nullable();
            $table->string('map')->nullable();
            $table->string('phome')->nullable();
            $table->string('fox')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('information');
    }
}
