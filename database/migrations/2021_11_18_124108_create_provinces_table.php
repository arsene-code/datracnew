<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            $table->boolean('seen')->default(false);
            $table->boolean('statut')->default(true);
            $table->timestamps();
        });

        DB::connection('mysql')->table('provinces')
        ->insert(
            array(
                array('libelle'=>'Estuaire'),
                array('libelle'=>'Haut-Ogooué'),
                array('libelle'=>'Moyen-Ogooué'),
                array('libelle'=>'Ngounié'),
                array('libelle'=>'Nyanga'),
                array('libelle'=>'Ogooué-Ivindo'),
                array('libelle'=>'Ogooué-Lolo'),
                array('libelle'=>'Ogooué-Maritime'),
                array('libelle'=>'Woleu-Ntem'),
            )
        );

         DB::commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
