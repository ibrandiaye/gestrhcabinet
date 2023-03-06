<?php
namespace App\Repositories;

use App\Fonction;

class FonctionRepository extends RessourceRepository{

    public function __construct(Fonction $fonction)
    {
        $this->model = $fonction;
    }
}
