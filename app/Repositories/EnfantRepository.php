<?php
namespace App\Repositories;

use App\Enfant;
use Illuminate\Support\Facades\DB;

class EnfantRepository extends RessourceRepository{

    public function __construct(Enfant $enfant)
    {
        $this->model = $enfant;
    }

public function getEnfantByEmploye($employe_id){
    return Enfant::with("docenfants")
    ->where("employe_id",$employe_id)
    ->get();
}
}
