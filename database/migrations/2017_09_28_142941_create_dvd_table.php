<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titill');
            $table->string('adalleikari');
            $table->integer('utgafuar');
            $table->integer('verd');
            $table->string('flokkur');
            $table->unsignedInteger('leikstjori_id');
            $table->foreign('leikstjori_id')->references('id')->on('leikstjori');
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
        Schema::dropIfExists('dvd');
    }
}
