<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('photo', 255);
            $table->string('titre', 255);
            $table->string('titre_en', 255);
            $table->text('short')->nullable();
            $table->text('short_en')->nullable();
            $table->text('message')->nullable();
            $table->text('message_en')->nullable();
            $table->date('dates');
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
        Schema::dropIfExists('actualites');
    }
}
