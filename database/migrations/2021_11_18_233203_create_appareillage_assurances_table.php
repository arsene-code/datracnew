<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppareillageAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appareillage_assurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tarif_conventionne');
            $table->unsignedBigInteger('appareillage_id')->unsigned();
                $table->foreign('appareillage_id')
                    ->references('id')
                    ->on('appareillages')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->unsignedBigInteger('assurance_id')->unsigned();
                $table->foreign('assurance_id')
                    ->references('id')
                    ->on('assurances')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
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
        Schema::dropIfExists('appareillage_assurances');
    }
}
