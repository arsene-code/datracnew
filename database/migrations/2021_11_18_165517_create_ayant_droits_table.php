<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyantDroitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayant_droits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('civilite', ['M','MME','MLE'])->default('M');
            $table->string('matricule',100)->unique();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->enum('sexe', ['F', 'M'])->default('M');
            $table->date('date_nais');
            $table->date('date_fin_con');
            $table->string('lien_parente')->nullable();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('assure_id')->unsigned();
            $table->foreign('assure_id')
                ->references('id')
                ->on('assures')
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
        Schema::dropIfExists('ayant_droits');
    }
}
