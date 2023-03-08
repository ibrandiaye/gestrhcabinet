<?php
namespace App\Repositories;

use App\Employeur;

class EmployeurRepository extends RessourceRepository{

    public function __construct(Employeur $employeur)
    {
        $this->model = $employeur;
    }
}
