<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNstjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nstjs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sifra');
            $table->integer('nstj1');
            $table->integer('nstj2');
            $table->integer('nstj3');
            $table->string('upravni_okrug');
            $table->string('sifra_opstine');
            $table->string('opstina');
            $table->string('naselje');
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
        Schema::dropIfExists('nstjs');
    }
}
