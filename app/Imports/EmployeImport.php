<?php

namespace App\Imports;

use App\Categorie;
use App\Employe;
use App\Employeur;
use App\Fonction;
use App\Responsabilite;
use App\Service;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeImport implements ToArray,WithHeadingRow,WithChunkReading
{
    public function array(array $data)
    {

    //  dd($data);
       foreach ($data as $key => $fiche_employe) {
        $employe = new Employe();
       //verifier si la fonction existante
       $fonction =  DB::table("fonctions")
        ->where("nom",$fiche_employe["fonction"])
        ->first();
        if($fonction){
            $employe->fonction_id = $fonction->id;
        }else{
            $fonction =new Fonction();
            $fonction->nom = $fiche_employe["fonction"];
            $fonction->save();
            $employe->fonction_id = $fonction->id;

        }
        //verifier si le service existe
        $service =  DB::table("services")
        ->where("nom",$fiche_employe["service"])
        ->first();
        if($service){
            $employe->service_id = $service->id;
        }else{
            $service =new Service();
            $service->nom = $fiche_employe["service"];
            $service->save();
            $employe->service_id = $service->id;

        }
         //verifier si le categorie existe
         $categorie =  DB::table("categories")
         ->where("nom",$fiche_employe["csp"])
         ->first();
         if($categorie){
             $employe->categorie_id = $categorie->id;
         }else{
             $categorie =new Categorie();
             $categorie->nom = $fiche_employe["csp"];
             $categorie->save();
             $employe->categorie_id = $categorie->id;

         }
        //verifier si le categorie Employeur
        $employeur =  DB::table("employeurs")
        ->where("nom",$fiche_employe["employeur"])
        ->first();
        if($employeur){
            $employe->employeur_id = $employeur->id;
        }else{
            $employeur =new Employeur();
            $employeur->nom = $fiche_employe["employeur"];
            $employeur->save();
            $employe->employeur_id = $employeur->id;

        }
        $employe->typecontrat = $fiche_employe["type_de_contrat"];
        $employe->matricule = $fiche_employe["matricule"];
        $employe->prenom = $fiche_employe["prenom_s"];
        $employe->nom = $fiche_employe["nom"];
        $employe->datenaiss = date('Y-m-d',strtotime($employe['date_naissance']));
        $employe->sexe = $fiche_employe["sexe"];
        $employe->datefonction = date('Y-m-d',strtotime($employe['prise_de_service']));
        $employe->save();
        if($fiche_employe["responsabilite"]){
            $responsabilite = new Responsabilite();
            $responsabilite->nom = $fiche_employe["responsabilite"];
            $responsabilite->employe_id = $employe->id;
            $responsabilite->save();
        }

       //dd();


         }


    }

    public function chunkSize(): int{
        return 100;
    }
}
