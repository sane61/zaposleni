<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecijalizacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specijalizacijas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kod');
            $table->string('osnovna_kvalifikacija');
            $table->string('naziv_specijalizacije');
            $table->string('vazi_od');
            $table->string('vazi_do')->nullable();
            $table->string('nova_specijalizacija')->nullable();
            $table->string('napomena')->nullable();
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
        Schema::dropIfExists('specijalizacijas');
    }
}
