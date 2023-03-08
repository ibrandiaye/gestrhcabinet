<?php
namespace App\Repositories;

use App\Famille;

class FamilleRepository extends RessourceRepository{

    public function __construct(Famille $famille)
    {
        $this->model = $famille;
    }
}
