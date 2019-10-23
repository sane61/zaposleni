<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadnoMestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radno_mestos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('organizaciona_jedinica_id');
            $table->bigInteger('katalog_id');
            $table->date('datum_promene');
            $table->date('datum_otvaranja');
            $table->date('datum_zatvaranja')->nullable();
            $table->string('naziv_sistematizacija');
            $table->text('opis_sistematizacija');
            $table->integer('broj_izvrsilaca');
            $table->bigInteger('vrsta_rizika_id');
            $table->bigInteger('nivo_kvalifikacije_id');
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
        Schema::dropIfExists('radno_mestos');
    }
}
