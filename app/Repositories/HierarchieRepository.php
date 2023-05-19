<?php
namespace App\Repositories;

use App\Hierarchie;

class HierarchieRepository extends RessourceRepository{

    public function __construct(Hierarchie $hierarchie)
    {
        $this->model = $hierarchie;
    }
}
