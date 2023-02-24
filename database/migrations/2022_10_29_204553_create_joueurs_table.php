<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('photo', 255)->nullable();
            $table->string('nom', 100);
            $table->date('date_nais');
            $table->string('nationalite', 100);
            $table->string('nationalite_en', 60);
            $table->integer('pays_id');
            $table->string('lieu_nais', 100);
            $table->integer('taille');
            $table->integer('poids');
            $table->string('pied_fort', 100);
            $table->string('pied_fort_en', 100);
            $table->string('slug', 255);
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
        Schema::dropIfExists('joueurs');
    }
}
