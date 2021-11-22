<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament_etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tarif_structure');
            $table->unsignedBigInteger('medicament_id')->unsigned();
            $table->foreign('medicament_id')
                ->references('id')
                ->on('medicaments')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->boolean('seen')->default(false);
            $table->boolean('statut')->default(true);
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
        Schema::dropIfExists('medicament_etablissements');
    }
}
