<?php
namespace App\Repositories;

use App\Employe;

class EmployeRepository extends RessourceRepository{

    public function __construct(Employe $employe)
    {
        $this->model = $employe;
    }
}
