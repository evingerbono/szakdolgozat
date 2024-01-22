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
        Schema::create('cegs', function (Blueprint $table) {
            $table->id('cegId');
            $table->string('neve');
            $table->string('tel');
            $table->string('kapcsNeve');
            $table->string('cim');
            $table->string('email');
            $table->foreignId('userId')->references('userId')->on('felhasznalos');
            $table->foreignId('szakId')->references('szakId')->on('szaks');
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
        Schema::dropIfExists('cegs');
    }
};
