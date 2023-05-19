<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->date('datedebut');
            $table->date('datefin')->nullable();
            $table->unsignedBigInteger('employe_id');
            $table->unsignedBigInteger('mobilite_id');
            $table->foreign('employe_id')
            ->references('id')
            ->on('employes');
            $table->foreign('mobilite_id')
            ->references('id')
            ->on('mobilites');
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
        Schema::dropIfExists('conges');
    }
}
