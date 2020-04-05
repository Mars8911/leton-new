<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('index_title_1');
            $table->string('index_description_1');
            $table->string('index_link_1');
            $table->string('index_title_2');
            $table->string('index_description_2');
            $table->string('index_link_2');
            $table->string('index_title_3');
            $table->string('index_description_3');
            $table->string('index_link_3');
            $table->string('index_title_4');
            $table->string('index_description_4');
            $table->string('index_link_4');
            $table->string('index_title_5');
            $table->string('index_description_5');
            $table->string('index_link_5');
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
        Schema::dropIfExists('homes');
    }
}
