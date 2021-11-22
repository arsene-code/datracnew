<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acte_assurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tarif_conventionne');
            $table->unsignedBigInteger('ticket_moderateur_id')->unsigned();
            $table->foreign('ticket_moderateur_id')
                ->references('id')
                ->on('ticket_moderateurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('acte_id')->unsigned();
            $table->foreign('acte_id')
                ->references('id')
                ->on('actes')
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
        Schema::dropIfExists('acte_assurances');
    }
}
