<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitres', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('photo', 255)->nullable();
            $table->string('nom', 100);
            $table->date('date_nais');
            $table->integer('pays_id');
            $table->string('nationalite', 100);
            $table->string('nationalite_en', 60);
            $table->string('lieu_nais', 100);
            $table->string('status', 100);
            $table->date('annee_debut_elite');
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
        Schema::dropIfExists('arbitres');
    }
}
