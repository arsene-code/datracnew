<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_assurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule_ag');
            $table->string('n_ordre_medecin')->nullable();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->enum('sexe', ['f', 'm'])->default('m');
            $table->date('date_nais');
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('assurance_id')->unsigned();
            $table->foreign('assurance_id')
                ->references('id')
                ->on('assurances')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('agent_assurances');
    }
}
