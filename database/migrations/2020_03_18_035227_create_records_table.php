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
            $table->id('id');
            $table->string('firmenname')->nullable();
            $table->string('strasse')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort')->nullable();
            $table->string('vorname')->nullable();
            $table->string('nachname')->nullable();
            $table->string('web')->nullable();
            $table->string('anrede')->nullable();
            $table->string('freifeld_1')->nullable();
            $table->string('titel')->nullable();
            $table->string('typ')->nullable();
            $table->string('kundennummer')->nullable();
            $table->string('branche')->nullable();
            $table->string('position')->nullable();
            $table->string('abteilung')->nullable();
            $table->string('geburtsdatum')->nullable();
            $table->string('betreuer')->nullable();
            $table->string('telefon')->nullable();
            $table->string('telefax')->nullable();
            $table->string('mobil')->nullable();
            $table->string('email')->nullable();
            $table->string('urlkurzel')->nullable();
            $table->string('freifeld_2')->nullable();
            $table->string('freifeld_3')->nullable();
            $table->string('freifeld_4')->nullable();
            $table->string('freifeld_5')->nullable();
            $table->string('freifeld_6')->nullable();
            $table->string('freifeld_7')->nullable();
            $table->string('freifeld_8')->nullable();
            $table->string('freifeld_9')->nullable();
            $table->string('freifeld_10')->nullable();
            $table->string('freifeld_11')->nullable();
            $table->string('freifeld_12')->nullable();
            $table->string('freifeld_13')->nullable();
            $table->string('freifeld_14')->nullable();
            $table->string('freifeld_15')->nullable();
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
