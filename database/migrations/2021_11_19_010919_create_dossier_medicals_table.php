<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_medicals', function (Blueprint $table) {
            $table->id();
            $table->enum('permission', ['o', 'n'])->default('o');
            $table->unsignedBigInteger('administrateur_id')->unsigned();
            $table->foreign('administrateur_id')
                ->references('id')
                ->on('administrateurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('feuille_hospitalisation_id')->unsigned();
            $table->foreign('feuille_hospitalisation_id')
                ->references('id')
                ->on('feuille_hospitalisations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('feuille_soin_id')->unsigned();
            $table->foreign('feuille_soin_id')
                ->references('id')
                ->on('feuille_soins')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('feuille_examen_id')->unsigned();
            $table->foreign('feuille_examen_id')
                ->references('id')
                ->on('feuille_examens')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('assure_id')->unsigned();
            $table->foreign('assure_id')
                ->references('id')
                ->on('assures')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('ayant_droit_id')->unsigned()->nullable();
            $table->foreign('ayant_droit_id')
                ->references('id')
                ->on('ayant_droits')
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
        Schema::dropIfExists('dossier_medicals');
    }
}
