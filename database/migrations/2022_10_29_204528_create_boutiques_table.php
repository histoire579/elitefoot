<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('libelle', 60);
            $table->string('lieu', 60);
            $table->string('telephone', 60)->unique();
            $table->string('horaire', 60);
            $table->string('horaire_en', 60);
            $table->integer('maillot_v');
            $table->integer('gajet_v');
            $table->integer('tikect_v');
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
        Schema::dropIfExists('boutiques');
    }
}
