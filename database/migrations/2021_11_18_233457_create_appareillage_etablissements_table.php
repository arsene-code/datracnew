<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppareillageEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appareillage_etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tarif_structure');
            $table->unsignedBigInteger('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('appareillage_id')->unsigned();
                $table->foreign('appareillage_id')
                    ->references('id')
                    ->on('appareillages')
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
        Schema::dropIfExists('appareillage_etablissements');
    }
}
