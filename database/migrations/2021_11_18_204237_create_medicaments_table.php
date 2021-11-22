<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_commercial');
            $table->string('dci');
            $table->double('taux_rem');
            $table->string('posologie')->nullable();
            $table->string('effet_indesir')->nullable();
            $table->string('indication')->nullable();
            $table->string('contre_indi')->nullable();
            $table->string('grossesse_allait')->nullable();
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
        Schema::dropIfExists('medicaments');
    }
}
