<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('message');
            $table->enum('lecture', ['Lu', 'Non lu'])->default('Non lu');
            $table->enum('envoi', ['Envoye', 'Non envoye'])->default('Envoye');
            $table->unsignedBigInteger('agent_etablissement_id')->unsigned();
            $table->unsignedBigInteger('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')
                ->references('id')
                ->on('etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('agent_etablissement_id')
                ->references('id')
                ->on('agent_etablissements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('messages');
    }
}
