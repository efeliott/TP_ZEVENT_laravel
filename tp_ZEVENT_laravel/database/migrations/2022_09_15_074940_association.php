<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Association extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association', function (Blueprint $table) {
            $table->id('id_association');
            $table->unsignedBigInteger('id_cagnotte');
            $table->string('nom_asso');
            $table->string('mail_asso');
            $table->string('desc_asso');

            
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
        Schema::drop('association');
    }
}
