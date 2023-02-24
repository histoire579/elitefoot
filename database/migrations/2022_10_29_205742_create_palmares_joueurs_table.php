<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalmaresJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palmares_joueurs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('restrict');
            $table->unsignedInteger('joueur_id');
            $table->foreign('joueur_id')->references('id')->on('joueurs')->onDelete('restrict');
            $table->string('recompence', 100);
            $table->string('recompence_en');
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
        Schema::dropIfExists('palmares_joueurs');
    }
}
