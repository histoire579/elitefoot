<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeuilleMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feuille_matches', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('restrict');

            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');

            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('restrict');
            $table->unsignedInteger('club1_id');
            $table->unsignedInteger('club2_id');
            $table->foreign('club1_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->foreign('club2_id')->references('id')->on('clubs')->onDelete('restrict');
            
            $table->unsignedInteger('equipe1');
            $table->foreign('equipe1')->references('id')->on('joueurs')->onDelete('restrict');
            $table->string('titularisation_equipe1', 30);
            
            $table->unsignedInteger('equipe2');
            $table->foreign('equipe2')->references('id')->on('joueurs')->onDelete('restrict');
            $table->string('titularisation_equipe2', 30);
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
        Schema::dropIfExists('feuille_matches');
    }
}
