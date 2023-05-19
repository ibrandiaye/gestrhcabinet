<?php
namespace App\Repositories;

use App\Responsabilite;
use Illuminate\Support\Facades\DB;

class ResponsabiliteRepository extends RessourceRepository{

    public function __construct(Responsabilite $responsabilite)
    {
        $this->model = $responsabilite;
    }

    public function getLastResponsabilite($id){
        return DB::table("responsabilites")
        ->where("employe_id",$id)
        ->orderBy("id","desc")
        ->first();
    }
    public function getByEmploye($id){
        return Responsabilite::with('employe')
        ->where("employe_id",$id)
        ->get();
    }
}
