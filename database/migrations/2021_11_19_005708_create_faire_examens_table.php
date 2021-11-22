<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaireExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faire_examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_examen');
            $table->string('agent_centre');
            $table->enum('effectue', ['o', 'n'])->default('n');
            $table->string('num_feuille');
            $table->unsignedBigInteger('medicament_etablissement_id')->unsigned();
            $table->foreign('medicament_etablissement_id')
                ->references('id')
                ->on('medicament_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('medicament_id')->unsigned();
            $table->foreign('medicament_id')
                ->references('id')
                ->on('medicaments')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('feuille_examen_id')->unsigned();
            $table->foreign('feuille_examen_id')
                ->references('id')
                ->on('feuille_examens')
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
        Schema::dropIfExists('faire_examens');
    }
}
