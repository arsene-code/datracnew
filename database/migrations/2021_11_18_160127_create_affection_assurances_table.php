<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectionAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affection_assurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assurance_id')->unsigned();
            $table->foreign('assurance_id')
                ->references('id')
                ->on('assurances')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('affection_id')->unsigned();
            $table->foreign('affection_id')
                ->references('id')
                ->on('affections')
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
        Schema::dropIfExists('affection_assurances');
    }
}
