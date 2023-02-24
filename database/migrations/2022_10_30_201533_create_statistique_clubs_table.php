<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistiqueClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistique_clubs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('restrict');
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->integer('tir_cadre');
            $table->integer('but_marque');
            $table->integer('but_encaisse');
            $table->integer('faute_comise');
            $table->integer('hors_jeux');
            $table->integer('carton_jaune');
            $table->integer('carton_rouge');
            $table->integer('penelty_marque');
            $table->integer('Coup_franc_marque');
            $table->integer('penalty_concede');
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
        Schema::dropIfExists('statistique_clubs');
    }
}
