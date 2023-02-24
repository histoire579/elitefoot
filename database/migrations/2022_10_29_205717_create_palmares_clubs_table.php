<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalmaresClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palmares_clubs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('restrict');
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->integer('rang');
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
        Schema::dropIfExists('palmares_clubs');
    }
}
