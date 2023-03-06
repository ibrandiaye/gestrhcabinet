<?php
namespace App\Repositories;

use App\Autorisation;
use Illuminate\Support\Facades\DB;

class AutorisationRepository extends RessourceRepository{

    public function __construct(Autorisation $autorisation)
    {
        $this->model = $autorisation;
    }
    public function getAutorisationWithTableRelation(){
        return Autorisation::with(['candidat','service'])
        ->get();
    }
    public function getAutorisationWithTableRelationById($id){
        return Autorisation::with(['candidat','service'])
        ->where('id',$id)
        ->first();
    }
    public function countReclamation(){
        return  DB::table('autorisations')->selectRaw('candidat_id, count(candidat_id) as nb')->groupBy('candidat_id')->get();
        /*  DB::table('autorisations')
        ->groupBy('candidat_id')
    ->count(); */
    }
    public function getNbAutorisation(){
        return DB::table('autorisations')
        ->count();
    }
}
