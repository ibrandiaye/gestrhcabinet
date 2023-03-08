<?php
namespace App\Repositories;

use App\Contrat;

class ContratRepository extends RessourceRepository{

    public function __construct(Contrat $contrat)
    {
        $this->model = $contrat;
    }
}
