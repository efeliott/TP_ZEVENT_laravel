<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Visionage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visionage', function (Blueprint $table) {
            $table->unsignedBigInteger('id_viewer');
            $table->unsignedBigInteger('id_participant');
            $table->primary(['id_viewer', 'id_participant']);
            $table->timestamp('temps_visionage');
            
            $table->foreign('id_viewer')->references('id_viewer')->on('viewer')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_participant')->references('id_participant')->on('streamers')->onDelete('restrict')->onUpdate('restrict');
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visionage');
    }
}
