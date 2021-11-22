<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('n_ordre_medecin')->nullable();
            $table->string('code_praticien')->nullable();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->enum('sexe', ['f', 'm'])->default('m');
            $table->date('date_nais');
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('specialite_id')->unsigned()->nullable();
            $table->foreign('specialite_id')
                ->references('id')
                ->on('specialites')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('ville_id')->unsigned();
            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
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
        Schema::dropIfExists('agent_etablissements');
    }
}
