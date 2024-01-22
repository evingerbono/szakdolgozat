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
        Schema::create('diaks', function (Blueprint $table) {
            $table->id('diakId');
            $table->string('nev');
            $table->date('szulDatum');
            $table->string('email');
            $table->string('tel');
            $table->string('fax');
            $table->string('lakcim');
            $table->string('neme');
            $table->string('allampolg');
            $table->foreignId('szakId')->references('szakId')->on('szaks');
            $table->foreignId('userId')->references('userId')->on('felhasznalos');
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
        Schema::dropIfExists('diaks');
    }
};
