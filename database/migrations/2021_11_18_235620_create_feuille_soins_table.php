<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeuilleSoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feuille_soins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('n_feuille')->unique();
            
            $table->unsignedBigInteger('agent_assurance_id')->unsigned();
            $table->foreign('agent_assurance_id')
                ->references('id')
                ->on('agent_assurances')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                
            $table->dateTime('date_agentassurance');
            
            $table->unsignedBigInteger('profil_id')->unsigned();
            $table->foreign('profil_id')
                  ->references('id')
                  ->on('profils')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
                
            $table->dateTime('date_caissier')->nullable();
            $table->dateTime('date_medecin')->nullable();  
            
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                
            $table->dateTime('date_pharmacien')->nullable();
            
            $table->unsignedBigInteger('specialite_id')->unsigned()->nullable();
            $table->foreign('specialite_id')
                ->references('id')
                ->on('specialites')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->string('typeAssure');
            $table->string('nom_prenomP');
            $table->string('telephoneP');
            $table->date('date_naisP');
            $table->string('n_matriculeP');
            $table->string('signatureP');
            $table->string('nom_prenomA')->nullable();
            $table->string('n_matriculeA')->nullable();
            $table->string('nom_prenomPra');
            $table->string('telephonePra');
            $table->string('signaturePra');
            $table->string('cachetPra');
            $table->string('qualificationPra');
            
            $table->unsignedBigInteger('etablissement_id')->unsigned()->nullable();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                
            $table->string('nomEtablissement');
            $table->string('n_ordre_medecin');
            
            $table->boolean('plein')->default(false);
            $table->boolean('ald')->default(false);
            $table->boolean('exonere')->default(false);
            $table->boolean('accident')->default(false);
            $table->boolean('grossesse')->default(false);
            $table->date('date_accident')->nullable();
            $table->string('temps_grossesse')->nullable();
            
            $table->unsignedBigInteger('ticket_moderateur_id')->unsigned();
            $table->foreign('ticket_moderateur_id')
                ->references('id')
                ->on('ticket_moderateurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('affection_id')->unsigned()->nullable();
            $table->foreign('affection_id')
                ->references('id')
                ->on('affections')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                
            $table->string('code_affection')->nullable();
            $table->double('tauxP')->nullable();
            $table->double('tarif_structureP')->nullable();
            $table->double('tarif_conventionneP')->nullable();
            $table->double('ticket_moderateurP')->nullable();
            $table->double('depassement')->nullable();
            $table->double('montant_assurance')->nullable();
            $table->double('total_pharmacie')->nullable();
            $table->double('total_assurance')->nullable();
            $table->double('ticket_mPharmacie')->nullable();
            
            $table->unsignedBigInteger('type_etablissement_id')->unsigned();
                $table->foreign('type_etablissement_id')
                    ->references('id')
                    ->on('type_etablissements')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');    
            
                    $table->string('nomPharmacie')->nullable();
            $table->string('signaturePharmacie')->nullable();
            $table->string('cachetPharmacie')->nullable();
            $table->dateTime('date_livraison_m')->nullable();
            
            $table->unsignedBigInteger('assure_id')->unsigned();
            $table->foreign('assure_id')
                ->references('id')
                ->on('assures')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('ayant_droit_id')->unsigned()->nullable();
            $table->foreign('ayant_droit_id')
                ->references('id')
                ->on('ayant_droits')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('prescription_medicale_id')->unsigned()->nullable();
            $table->foreign('prescription_medicale_id')
                ->references('id')
                ->on('prescription_medicales')
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
        Schema::dropIfExists('feuille_soins');
    }
}