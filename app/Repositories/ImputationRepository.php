<?php
namespace App\Repositories;

use App\Imputation;
use Illuminate\Support\Facades\DB;

class ImputationRepository extends RessourceRepository{

    public function __construct(Imputation $imputation)
    {
        $this->model = $imputation;
    }

    public function getImputationByEmploye($id){
        return DB::table("imputations")
        ->where("employe_id",$id)
        ->get();
    }
}
