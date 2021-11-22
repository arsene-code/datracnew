<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionMedicalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_medicales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_medicament')->nullable();
            $table->string('nom_appareil')->nullable();
            $table->string('posologie')->nullable();
            $table->integer('quantite')->nullable();
            $table->date('date_ord');
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('medicament_id')->unsigned();
            $table->foreign('medicament_id')
                ->references('id')
                ->on('medicaments')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('appareillage_id')->unsigned();
                $table->foreign('appareillage_id')
                    ->references('id')
                    ->on('appareillages')
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
        Schema::dropIfExists('prescription_medicales');
    }
}
