<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('titre');
            $table->boolean('seen')->default(false);
            $table->boolean('statut')->default(true);
            $table->unsignedBigInteger('type_affection_id')->unsigned();
            $table->foreign('type_affection_id')
                ->references('id')
                ->on('type_affections')
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
        Schema::dropIfExists('affections');
    }
}
