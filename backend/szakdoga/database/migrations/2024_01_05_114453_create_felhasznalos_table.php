<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felhasznalos', function (Blueprint $table) {
            $table->id('userId');
            $table->string('felNev');
            $table->string('jelszo');
            $table->foreignId('jogId')->references('jogId')->on('jogosultsags');
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
        Schema::dropIfExists('felhasznalos');
    }
};
