<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsabilitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabilites', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->date("debut");
            $table->date("fin")->nullable();
            $table->unsignedBigInteger("employe_id");
            $table->foreign("employe_id")
            ->references("id")
            ->on("employes");
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
        Schema::dropIfExists('responsabilites');
    }
}
