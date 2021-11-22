<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestation_etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tarif_structure');
            $table->integer('depassement');
            $table->integer('montant_payer');
            $table->integer('total');
            $table->unsignedBigInteger('prestation_assurance_id')->unsigned();
                $table->foreign('prestation_assurance_id')
                    ->references('id')
                    ->on('prestation_assurances')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->unsignedBigInteger('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
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
        Schema::dropIfExists('prestation_etablissements');
    }
}
