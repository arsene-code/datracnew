<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_etablissement',100);
            $table->string('code_etablissement', 100);
            $table->string('raison_sociale',255);
            $table->string('statut_juridique',100)->nullable();
            $table->string('site_web', 100)->nullable();
            $table->string('tel',100)->nullable();
            $table->string('bp',100)->nullable();
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('ville_id')->unsigned();
            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('type_etablissement_id')->unsigned();
            $table->foreign('type_etablissement_id')
                ->references('id')
                ->on('type_etablissements')
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
        Schema::dropIfExists('etablissements');
    }
}
