<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_participant');
            $table->unsignedBigInteger('id_evenement');

            $table->foreign('id_evenement')->references('id')->on('evenement')->onDelete(restrict)->onUpdate(restrict);
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
        Schema::drop('participer');
    }
}
