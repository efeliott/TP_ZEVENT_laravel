<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Theme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_evenement');
            $table->unsignedBigInteger('id_jeu');
            
            $table->foreign('id_evenement')->references('id')->on('evenement')->onDelete(restrict)->onUpdate(restrict);
            $table->foreign('id_jeu')->references('id')->on('jeu')->onDelete(restrict)->onUpdate(restrict);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('theme');
    }
}
