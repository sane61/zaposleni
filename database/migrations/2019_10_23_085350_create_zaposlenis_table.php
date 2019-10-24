<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaposlenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaposlenis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datum_promene')->nullable();
            $table->string('ime');
            $table->string('prezime');
            $table->string('prezime_rodjenje')->nullable();
            $table->bigInteger('drzavljanin_srbije_id');
            $table->string('jmbg');
            $table->string('jmbg_alter')->nullable();
            $table->bigInteger('pol_id');
            $table->date('datum_rodjenja')->nullable();
            $table->bigInteger('drzava_rodjena_id');
            $table->bigInteger('licenca_id');
            $table->string('broj_licence')->nullable();
            $table->date('datum_licence')->nullable();
            $table->bigInteger('nastavno_zvanje_id');
            $table->bigInteger('naucno_zvanje_id');
            $table->bigInteger('strucno_priznanje_id');
            $table->string('adresa')->nullable();
            $table->bigInteger('naselje_id');
            $table->string('telefon')->nullable();
            $table->string('mobilni')->nullable();
            $table->string('mail')->nullable();
            $table->string('kod')->nullable();
            $table->bigInteger('sifra');
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
        Schema::dropIfExists('zaposlenis');
    }
}
