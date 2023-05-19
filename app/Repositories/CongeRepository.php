<?php
namespace App\Repositories;

use App\Conge;

class CongeRepository extends RessourceRepository{

    public function __construct(Conge $conge)
    {
        $this->model = $conge;
    }
    public function getCongeByEmploye($id){
        return Conge::with(["mobilite","employe"])
        ->where("employe_id",$id)
        ->orderBy("id","desc")
        ->get();
    }
}
