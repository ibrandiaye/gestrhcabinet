<?php
namespace App\Repositories;

use App\Mobilite;

class MobiliteRepository extends RessourceRepository{

    public function __construct(Mobilite $mobilite)
    {
        $this->model = $mobilite;
    }
}
