<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id('comid');
            $table->string('firmenname')->nullable();
            $table->string('strasse')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort')->nullable();
            $table->string('vorname')->nullable();
            $table->string('nachname')->nullable();
            $table->string('web')->nullable();
            $table->string('gender')->nullable();
            $table->string('optradio')->nullable();
            $table->string('titel')->nullable();
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
        Schema::dropIfExists('records');
    }
}
