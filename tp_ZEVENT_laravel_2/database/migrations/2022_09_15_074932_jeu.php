<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jeu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeu', function (Blueprint $table) {
            $table->id('id_jeu');
            $table->unsignedBigInteger('id_categorie');
            $table->string('nom_jeu');
            
            $table->foreign('id_categorie')->references('id_categorie')->on('categorie')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jeu');
    }
}
