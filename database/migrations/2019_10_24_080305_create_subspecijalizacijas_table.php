<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubspecijalizacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subspecijalizacijas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kod');
            $table->string('osnovna_kvalifikacija');
            $table->string('specijalizacija');
            $table->string('subspecijalizacija');
            $table->string('datum_stupanja');
            $table->string('datum_ukinuta')->nullable();
            $table->string('naslednik')->nullable();
            $table->string('napomena')->nullable();
            $table->string('clan')->nullable();
            $table->string('sifra_spec')->nullable();
            $table->string('tacka_pravilnik')->nullable();
            $table->string('godina')->nullable();
            $table->string('g2010')->nullable();
            $table->string('g2013')->nullable();
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
        Schema::dropIfExists('subspecijalizacijas');
    }
}
