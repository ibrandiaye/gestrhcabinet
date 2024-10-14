<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docenfants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('fichier');
            $table->unsignedBigInteger('enfant_id');
            $table->foreign('enfant_id')
            ->references('id')
            ->on('enfants');
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
        Schema::dropIfExists('docenfants');
    }
}
