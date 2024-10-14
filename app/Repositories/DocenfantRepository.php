<?php
namespace App\Repositories;

use App\Docenfant;

class DocenfantRepository extends RessourceRepository{

    public function __construct(Docenfant $docenfant)
    {
        $this->model = $docenfant;
    }
}
