<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('n_matricule',100)->unique();
            $table->enum('civilite', ['M','MME','MLLE'])->default('M');
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->date('date_nais');
            $table->date('date_fin_con');
            $table->enum('sexe', ['F', 'M'])->default('M');
            $table->string('n_dossier')->nullable();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('assures');
    }
}
