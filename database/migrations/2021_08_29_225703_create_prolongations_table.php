<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProlongationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prolongations', function (Blueprint $table) {
            $table->id();
            $table->string('raison');
            $table->date('datedebut');
            $table->integer('duree');
            $table->date('datefin');
            $table->unsignedBigInteger('autorisation_id');
            $table->foreign('autorisation_id')
            ->references('id')
            ->on('autorisations');
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
        Schema::dropIfExists('prolongations');
    }
}
