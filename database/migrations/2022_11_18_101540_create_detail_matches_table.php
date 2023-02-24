<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_matches', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('restrict');

            $table->unsignedInteger('club1_id');
            $table->foreign('club1_id')->references('id')->on('clubs')->onDelete('restrict');

            $table->unsignedInteger('club2_id');
            $table->foreign('club2_id')->references('id')->on('clubs')->onDelete('restrict');

            $table->integer('nbre_but_club1');
            $table->integer('nbre_but_club2');

            $table->integer('possession_club1');
            $table->integer('possession_club2');

            $table->integer('nbre_tir_club1');
            $table->integer('nbre_tir_club2');

            $table->integer('nbre_tir_cadre_club1');
            $table->integer('nbre_tir_cadre_club2');

            $table->integer('nbre_tir_arrete_club1');
            $table->integer('nbre_tir_arrete_club2');

            $table->integer('nbre_faute_club1');
            $table->integer('nbre_faute_club2');

            $table->integer('nbre_hors_jeu_club1');
            $table->integer('nbre_hors_jeu_club2');

            $table->integer('nbre_carton_jaune_club1');
            $table->integer('nbre_carton_jaune_club2');

            $table->integer('nbre_carton_rouge_club1');
            $table->integer('nbre_carton_rouge_club2');

            $table->integer('nbre_corner_club1');
            $table->integer('nbre_corner_club2');

            $table->integer('nbre_centre_club1');
            $table->integer('nbre_centre_club2');

            $table->integer('nbre_tacle_club1');
            $table->integer('nbre_tacle_club2');

            $table->integer('nbre_coup_franc_club1');
            $table->integer('nbre_coup_franc_club2');

            $table->integer('nbre_interception_club1');
            $table->integer('nbre_interception_club2');

            $table->integer('nbre_passe_reussie_club1');
            $table->integer('nbre_passe_reussie_club2');
            
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
        Schema::dropIfExists('detail_matches');
    }
}
