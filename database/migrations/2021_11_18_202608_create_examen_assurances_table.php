<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_assurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tarif_conventionne');
            $table->unsignedBigInteger('examen_id')->unsigned();
                $table->foreign('examen_id')
                    ->references('id')
                    ->on('examens')
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
        Schema::dropIfExists('examen_assurances');
    }
}
