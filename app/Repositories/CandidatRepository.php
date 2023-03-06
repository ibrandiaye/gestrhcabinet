<?php
namespace App\Repositories;

use App\Candidat;
use Illuminate\Support\Facades\DB;

class CandidatRepository extends RessourceRepository{

    public function __construct(Candidat $candidat)
    {
        $this->model = $candidat;
    }
    public function getCandidatWithRelation($id){
       return Candidat::with(['autorisations','autorisations.prolongations','documents'])
        ->where('id',$id)
        ->first();
    }
    public function getAllCandidatWithRelation(){
        return Candidat::with(['autorisations','autorisations.prolongations','documents'])
         ->get();
     }
    public function getByNom($nom){
        return Candidat::with(['autorisations'])
        ->where('nom',$nom)
        ->get();

    }
    public function getByPrenom($prenom){
        return Candidat::with(['autorisations'])
        ->where('prenom',$prenom)
        ->get();

    }
    public function getByService($service_id){
        return Candidat::with(['autorisations'])
        ->where('service_id',$service_id)
        ->get();

    }
    public function getByNumeroDossier($numDossier){
        return Candidat::with(['autorisations'])
        ->where('numdossier',$numDossier)
        ->get();

    }
    public function getByAllParameter($nom,$prenom,$service_id,$numDossier){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],['service_id',$service_id],['prenom',$prenom],
        ['nom',$nom]])
        ->get();
    }
    public function getByNomAndPrenom($nom,$prenom){
        return Candidat::with(['autorisations'])
        ->where([['prenom',$prenom],['nom',$nom]])
        ->get();
    }
    public function getByNomAndDossier($nom,$numDossier){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],
        ['nom',$nom]])
        ->get();
    }
    public function getByNomAndService($nom,$service){
        return Candidat::with(['autorisations'])
        ->where([['service_id',$service],['nom',$nom]])
        ->get();
    }
    public function getByNomAndDossierAndSerivce($nom,$numDossier,$service){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],
        ['nom',$nom],['service_id',$service]])
        ->get();
    }
    public function getByNomAndPrenomDossier($nom,$prenom,$numDossier){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],
        ['nom',$nom],['prenom',$prenom]])
        ->get();
    }
    public function getByNomAndPrenomService($nom,$prenom,$service){
        return Candidat::with(['autorisations'])
        ->where([['service_id',$service],
        ['nom',$nom],['prenom',$prenom]])
        ->get();
    }
    public function getByPrenomAndDossier($prenom,$numDossier){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],['prenom',$prenom]])
        ->get();
    }
    public function getByPrenomAndDossierAndSerivce($prenom,$numDossier,$service){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],['service_id',$service],['prenom',$prenom]])
        ->get();
    }
    public function getByDossierAndSerivce($numDossier,$service){
        return Candidat::with(['autorisations'])
        ->where([['numdossier',$numDossier],['service_id',$service]])
        ->get();
    }
    public function getNbCandidat(){
        return DB::table('candidats')
        ->count();
    }

}
