<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuiviFichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suivi_fiches', function (Blueprint $table) {
            $table->id();
            $table->enum('valider', ['o', 'n'])->default('n');
            $table->unsignedBigInteger('assurance_id')->unsigned();
                $table->foreign('assurance_id')
                    ->references('id')
                    ->on('assurances')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->unsignedBigInteger('etablissement_id')->unsigned()->nullable();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('agent_assurance_id')->unsigned();
            $table->foreign('agent_assurance_id')
                ->references('id')
                ->on('agent_assurances')
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
        Schema::dropIfExists('suivi_fiches');
    }
}
