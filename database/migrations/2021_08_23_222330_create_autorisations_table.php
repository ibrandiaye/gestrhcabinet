<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorisations', function (Blueprint $table) {
            $table->id();
            $table->string('fonction');
            $table->date('datedebut');
            $table->integer('duree');
            $table->date('datefin');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('candidat_id');
            $table->foreign('service_id')
            ->references('id')
            ->on('services');
            $table->foreign('candidat_id')
            ->references('id')
            ->on('candidats');

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
        Schema::dropIfExists('autorisations');
    }
}
