<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistiqueJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistique_joueurs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('restrict');
            $table->unsignedInteger('joueur_id');
            $table->foreign('joueur_id')->references('id')->on('joueurs')->onDelete('restrict');
            $table->integer('tir');
            $table->integer('tir_cadre');
            $table->integer('but_marque');
            $table->integer('passe_decisive');
            $table->integer('ballon_recupere');
            $table->integer('ballon_intercepte');
            $table->integer('tir_arrete');
            $table->integer('but_encaisse');
            $table->integer('faute_comise');
            $table->integer('hors_jeux');
            $table->integer('minute_jouer');
            $table->integer('faute_subis');
            $table->integer('carton_jaune');
            $table->integer('carton_rouge');
            $table->integer('centre');
            $table->integer('penelty_marque');
            $table->integer('Coup_franc_marque');
            $table->integer('passe_reussi');
            $table->integer('penalty_arrete');
            $table->integer('penalty_concede');
            $table->integer('but_contre_camp');
            $table->string('homme_match', 100);
            $table->string('domiciliation', 100);
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
        Schema::dropIfExists('statistique_joueurs');
    }
}
