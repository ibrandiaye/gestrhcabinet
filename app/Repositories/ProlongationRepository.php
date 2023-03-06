<?php
namespace App\Repositories;

use App\Prolongation;
use Illuminate\Support\Facades\DB;

class ProlongationRepository extends RessourceRepository{

    public function __construct(Prolongation $prolongation)
    {
        $this->model = $prolongation;
    }
    public function getProlongationWithTableRelation(){
       return Prolongation::with(['autorisation','autorisation.candidat','autorisation.service'])
        ->get();
    }
    public function getProlongationWithTableRelationByID($id){
        return Prolongation::with(['autorisation','autorisation.candidat','autorisation.service'])
        ->where('id',$id)
         ->first();
     }public function getNbProlongation(){
        return DB::table('prolongations')
        ->count();
    }

}
