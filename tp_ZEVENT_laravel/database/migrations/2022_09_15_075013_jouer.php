<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jouer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jouer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jeu');
            $table->unsignedBigInteger('id_participant');
            
            $table->foreign('id_jeu')->references('id')->on('jeu')->onDelete(restrict)->onUpdate(restrict);
            $table->foreign('id_participant')->references('id')->on('participant')->onDelete(restrict)->onUpdate(restrict);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jouer');
    }
}
