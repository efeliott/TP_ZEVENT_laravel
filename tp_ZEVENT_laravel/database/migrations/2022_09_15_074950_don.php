<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Don extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don', function (Blueprint $table) {
            $table->id('id_don');
            $table->unsignedBigInteger('id_viewer');
            $table->unsignedBigInteger('id_participant');
            $table->unsignedBigInteger('id_cagnotte');
            $table->int('montant_don');
            $table->timestamp('date_don');
            
            $table->foreign('id_viewer')->references('id')->on('viewer')->onDelete(restrict)->onUpdate(restrict);
            $table->foreign('id_participant')->references('id')->on('participant')->onDelete(restrict)->onUpdate(restrict);
            $table->foreign('id_cagnotte')->references('id')->on('cagnotte')->onDelete(restrict)->onUpdate(restrict);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('don');
    }
}
