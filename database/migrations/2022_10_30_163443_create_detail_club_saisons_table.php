<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailClubSaisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_club_saisons', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->unsignedInteger('joueur_id');
            $table->foreign('joueur_id')->references('id')->on('joueurs')->onDelete('restrict');
            $table->unsignedInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('postes')->onDelete('restrict');
            $table->integer('dorssad');
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
        Schema::dropIfExists('detail_club_saisons');
    }
}
