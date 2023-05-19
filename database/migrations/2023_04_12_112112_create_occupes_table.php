<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupes', function (Blueprint $table) {
            $table->id();
            $table->date("debut");
            $table->date("fin")->nullable();
            $table->unsignedBigInteger("fonction_id");
            $table->unsignedBigInteger("employe_id");
            $table->foreign("employe_id")
            ->references("id")
            ->on("employes");
            $table->foreign("fonction_id")
            ->references("id")
            ->on("fonctions");
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
        Schema::dropIfExists('occupes');
    }
}
