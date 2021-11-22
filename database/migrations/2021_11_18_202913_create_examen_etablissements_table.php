<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('heure_operation');
            $table->string('resultat');
            $table->integer('tarif_structure');
            $table->integer('montant_payer');
            $table->unsignedBigInteger('examen_assurance_id')->unsigned();
            $table->foreign('examen_assurance_id')
                ->references('id')
                ->on('examen_assurances')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('etablissement_id')->unsigned();
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
            $table->unsignedBigInteger('ticket_moderateur_id')->unsigned();
            $table->foreign('ticket_moderateur_id')
                ->references('id')
                ->on('ticket_moderateurs')
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
        Schema::dropIfExists('examen_etablissements');
    }
}
