<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriseChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prise_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('accident')->default(false);
            $table->date('date_accident')->nullable();
            $table->boolean('soins_grossesse')->default(false);
            $table->date('debut_grossesse')->nullable();
            $table->date('date_accouchement')->nullable();
            $table->unsignedBigInteger('type_assure_id')->unsigned();
            $table->foreign('type_assure_id')
                ->references('id')
                ->on('type_assures')
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
        Schema::dropIfExists('prise_charges');
    }
}
