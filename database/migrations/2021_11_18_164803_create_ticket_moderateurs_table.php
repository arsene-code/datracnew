<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketModerateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_moderateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pourcentage');
            $table->unsignedBigInteger('prise_charge_id')->unsigned();
            $table->foreign('prise_charge_id')
                ->references('id')
                ->on('prise_charges')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('type_assure_id')->unsigned();
            $table->foreign('type_assure_id')
                ->references('id')
                ->on('type_assures')
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
        Schema::dropIfExists('ticket_moderateurs');
    }
}
