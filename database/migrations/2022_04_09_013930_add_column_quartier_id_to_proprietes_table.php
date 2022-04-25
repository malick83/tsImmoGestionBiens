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
        Schema::table('proprietes', function (Blueprint $table) {
            //
            $table->foreignId('quartier_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')->after('agence_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proprietes', function (Blueprint $table) {
            //
        });
    }
};
