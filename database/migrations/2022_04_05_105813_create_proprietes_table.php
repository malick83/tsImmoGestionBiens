<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('typePropriete');
            $table->string('superficie');
            $table->integer('nombreEtage');
            $table->integer('nombrePiece');
            $table->string('adresse');
            $table->string('description');
            $table->unsignedBigInteger('proprietaire_id');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires');
            $table->unsignedBigInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');
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
        Schema::dropIfExists('proprietes');
    }
};
