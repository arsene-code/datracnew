<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->timestamps();
        });

        DB::connection('mysql')->table('profils')
        ->insert(
            array(
                array('libelle'=>'SUPERADMIN'),
                array('libelle'=>'ADMIN ETABLISSEMENT'),
                array('libelle'=>'ADMIN ASSURANCE'),
                array('libelle'=>'MANAGER ETABLISSEMENT'),
                array('libelle'=>'ADMIN ASSURANCE'),
                array('libelle'=>'COMPTABLE ETABLISSEMENT'),
                array('libelle'=>'COMPTABLE ASSURANCE'),
                array('libelle'=>'SERVICE TIERS PAYANT'),
                array('libelle'=>'SERVICE ADMINISTRATIF'),
                array('libelle'=>'CAISSIER'),
                array('libelle'=>'PHARMACIEN'),
                array('libelle'=>'TECHNICIEN LABO'),
                array('libelle'=>'PRATICIEN'),
                array('libelle'=>'MEDECIN REFERENT'),
                array('libelle'=>'ASSURE'),
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
        Schema::dropIfExists('profils');
    }
}
