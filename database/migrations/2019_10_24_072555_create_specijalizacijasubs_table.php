<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecijalizacijasubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specijalizacijasubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('zaposleni_id');
            $table->date('datum_promene')->nullable();
            $table->bigInteger('specijalizacija_id');
            $table->date('datum_spe_p')->nullable();
            $table->date('datum_spe_k')->nullable();
            $table->bigInteger('subspecijalizacija_id')->nullable();
            $table->date('datum_sub_p')->nullable();
            $table->date('datum_sub_k')->nullable();
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
        Schema::dropIfExists('specijalizacijasubs');
    }
}
