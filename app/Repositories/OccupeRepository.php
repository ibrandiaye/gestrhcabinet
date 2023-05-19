<?php
namespace App\Repositories;

use App\Occupe;
use Illuminate\Support\Facades\DB;

class OccupeRepository extends RessourceRepository{

    public function __construct(Occupe $occupe)
    {
        $this->model = $occupe;
    }

    public function getLastOccupe($id){
        return Occupe::with(['employe','fonction'])
        ->where("employe_id",$id)
        ->orderBy("id","desc")
        ->first();
    }
    public function getByEmploye($id){
        return Occupe::with(['employe','fonction'])
        ->where("employe_id",$id)
        ->get();
    }
}
