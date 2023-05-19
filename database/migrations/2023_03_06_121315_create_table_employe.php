<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmploye extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaiss');
            $table->string('lieunaiss');
            $table->string('email');
            $table->string('tel');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('matricule');
            $table->string('cni');
            $table->string('religion');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
            ->references('id')
            ->on('services');
            $table->unsignedBigInteger('contrat_id');
            $table->foreign('contrat_id')
            ->references('id')
            ->on('contrats');
            $table->unsignedBigInteger('famille_id');
            $table->foreign('famille_id')
            ->references('id')
            ->on('familles');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories');
           /*  $table->unsignedBigInteger('fonction_id');
            $table->foreign('fonction_id')
            ->references('id')
            ->on('fonctions'); */
            $table->unsignedBigInteger('employeur_id');
            $table->foreign('employeur_id')
            ->references('id')
            ->on('employeurs');
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
        Schema::dropIfExists('employes');
    }
}
