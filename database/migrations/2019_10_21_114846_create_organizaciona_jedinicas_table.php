<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizacionaJedinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizaciona_jedinicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sifra');
            $table->string('sifra_pripadnost');
            $table->string('naziv_latinica');
            $table->string('naziv_cirilica');
            $table->string('naziv_resenje');
            $table->string('funkcionalna_definicija_id');
            $table->string('teritorijalna_definicija_id');
            $table->date('datum_kreiranja');
            $table->date('datum_gasenja')->nullable();
            $table->date('datum_primene');
            $table->string('e_mail')->nullable();
            $table->string('telefon')->nullable();
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
        Schema::dropIfExists('organizaciona_jedinicas');
    }
}
