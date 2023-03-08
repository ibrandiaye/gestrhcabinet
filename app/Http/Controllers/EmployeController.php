<?php

namespace App\Http\Controllers;

use App\Repositories\CategorieRepository;
use App\Repositories\ContratRepository;
use App\Repositories\EmployeRepository;
use App\Repositories\EmployeurRepository;
use App\Repositories\FamilleRepository;
use App\Repositories\FonctionRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeController extends Controller
{
    protected $employeRepository;
    protected $serviceRepository;
    protected $contratRepository;
    protected $categorieRepository;
    protected $familleRepository;
    protected $employeurRepository;
    protected $fonctionRepository;


    public function __construct(EmployeRepository $employeRepository, ServiceRepository $serviceRepository,
    ContratRepository $contratRepository,CategorieRepository $categorieRepository,FamilleRepository $familleRepository,
    EmployeurRepository $employeurRepository,FonctionRepository $fonctionRepository){
        $this->employeRepository =$employeRepository;
        $this->serviceRepository = $serviceRepository;
        $this->contratRepository = $contratRepository;
        $this->categorieRepository = $categorieRepository;
        $this->familleRepository = $familleRepository;
        $this->employeurRepository = $employeurRepository;
        $this->fonctionRepository = $fonctionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = $this->employeRepository->getAll();
      /*   $services = $this->serviceRepository->getAll();
        $nbContrats = $this->contratRepository->countReclamation();
        $maxReclama = 0;
        $virgule="";
        foreach ($nbContrats as $key => $nbContrat) {
            if($nbContrat->nb > $maxReclama)
                $maxReclama = $nbContrat->nb;
        }
       for ($i=0; $i < $maxReclama ; $i++) {
           $virgule = $virgule.",";
       }*/
       foreach ($employes as $employe) {
        $date1=date_create(date('Y-m-d'));
        $date2 =date_create($employe->datefonction);
        $dif=date_diff($date1,$date2);
        $diff = $dif->format('%a')/365;
        $employe->anciennete = floor($diff);
        $datenaiss = date_create($employe->datenaiss);
        $age  = date_diff($date1,$datenaiss);
        $employe->age = floor($age->format('%a')/365);
        $employe->trancheage=$this->trancheAge($employe);
       $employe->dateretraite = $this->ajouterAnnees($employe->datenaiss,$employe->retraite);
     $employe->trancheanciennete = $this->trancheAnxiente($employe);
    }
        return view('employe.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = $this->serviceRepository->getAll();
        $contrats = $this->contratRepository->getAll();
        $categories = $this->categorieRepository->getAll();
        $familles = $this->familleRepository->getAll();
        $employeurs = $this->employeurRepository->getAll();
        $fonctions = $this->fonctionRepository->getAll();
        return view('employe.add',compact('services','contrats','categories','employeurs','services',
    'fonctions','familles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required|string',
            'prenom'=> 'required|string',
            'datenaiss'=> 'required|string',
            'lieunaiss'=> 'required|string',
            'email'=> 'required|string',
            'sexe'=> 'required|string',
            'service_id'=> 'required|string',
            'matricule'=> 'required|string',
            'adresse'=> 'required|string',
            'tel'=> 'required|string',
            'cni'=> 'required|string',
            'religion'=> 'required|string',
            'datefonction'=> 'required|date',
            'famille_id'=> 'required|string',
            'categorie_id'=> 'required|string',
            'fonction_id'=> 'required|string',
            'employeur_id'=> 'required|string',
            'contrat_id'=> 'required|string',

        ],[
            'nom.required' => 'Nom  obligatoire',
            'prenom.required' => 'Prenom  obligatoire',
            'datenaiss.required' => 'Date Naissance  obligatoire',
            'lieunaiss.required' => 'Lieu de naissance  obligatoire',
            'email.required' => 'email  obligatoire',
            'sexe.required' => 'sexe  obligatoire',
            'service_id.required' => 'Service  obligatoire',
            'matricule'=> 'Matricule Obligatoire',
            'adresse'=> 'Adresse Obligatoire',
            'tel'=> 'Tel Obligatoire',
            'cni'=> 'Numéro Carte d\'identite obligatoire',
            'religion'=> 'Religion Obligatoire',
            'datefonction'=> 'Date de prise en fonction Obligatoire',
            'famille_id'=> 'Famille Obligatoire',
            'categorie_id'=> 'Categorie Obligatoire',
            'fonction_id'=> 'Fonction Obligatoire',
            'employeur_id'=> 'Employeur Obligatoire',
            'contrat_id'=> ' Contrat Obligatoire',
        ]);

        $employes = $this->employeRepository->store($request->all());
        return redirect('employe');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $employe = $this->employeRepository->getEmployeWithRelation($id);
        $services = $this->serviceRepository->getAll();
        return view('employe.show',compact('employe','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = $this->serviceRepository->getAll();
        $employe = $this->employeRepository->getById($id);
        $contrats = $this->contratRepository->getAll();
        $categories = $this->categorieRepository->getAll();
        $familles = $this->familleRepository->getAll();
        $employeurs = $this->employeurRepository->getAll();
        $fonctions = $this->fonctionRepository->getAll();
        return view('employe.edit',compact('employe','services','contrats','categories','employeurs','services',
        'fonctions','familles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->employeRepository->update($id, $request->all());
        return redirect('employe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = $this->employeRepository->getById($id);
        $service = $employe->service;
       // $employe->service()->detach($service);
        foreach ($employe->contrats as $contrat) {
        $contrat->prolongations()->delete();
        }
        // $employe->contrats()->prolongations()->delete();
        $employe->contrats()->delete();
        $employe->documents()->delete();
        $this->employeRepository->destroy($id);
        return redirect('employe');
    }
   /*  public function search(Request $request){
        $services = $this->serviceRepository->getAll();
        if($request['nom'] && !$request['prenom'] && !$request['numdossier'] && !$request['service_id'] ){
            $employes = $this->employeRepository->getByNom($request['nom']);

        }elseif(!$request['nom'] && $request['prenom'] && !$request['numdossier'] && !$request['service_id']){
            $employes = $this->employeRepository->getByPrenom($request['prenom']);

        }elseif(!$request['nom'] && !$request['prenom'] && $request['numdossier'] && !$request['service_id']){
            $employes = $this->employeRepository->getByNumeroDossier($request['numdossier']);
        }elseif(!$request['nom'] && !$request['prenom'] && !$request['numdossier'] && $request['service_id']){
            $employes = $this->employeRepository->getByService($request['service_id']);
        } elseif($request['nom'] && !$request['prenom'] && !$request['numdossier'] && !$request['service_id'] ){
            $employes = $this->employeRepository->getByNom($request['nom']);

        }elseif($request['nom'] && $request['prenom'] && !$request['numdossier'] && !$request['service_id']){
            $employes = $this->employeRepository->getByNomAndPrenom($request['nom'],$request['prenom']);

        }
        elseif($request['nom'] && $request['prenom'] && $request['numdossier'] && !$request['service_id']){
            $employes = $this->employeRepository->getByNomAndPrenomDossier($request['nom'],$request['prenom'],$request['numdossier']);

        }
        elseif($request['nom'] && $request['prenom'] && !$request['numdossier'] && $request['service_id']){
            $employes = $this->employeRepository->getByNomAndPrenomService($request['nom'],$request['prenom'],$request['service_id']);

        }
    elseif($request['nom'] && !$request['prenom'] && $request['numdossier'] && !$request['service_id']){
        $employes = $this->employeRepository->getByNomAndDossier($request['nom'],$request['numdossier']);

    }elseif($request['nom'] && !$request['prenom'] && !$request['numdossier'] && $request['service_id']){
        $employes = $this->employeRepository->getByNomAndService($request['nom'],$request['service_id']);

    }elseif($request['nom'] && !$request['prenom'] && $request['numdossier'] && $request['service_id']){
        $employes = $this->employeRepository->getByNomAndDossierAndSerivce($request['nom'],$request['numdossier'],$request['service_id']);
    }elseif(!$request['nom'] && $request['prenom'] && $request['numdossier'] && !$request['service_id']){
            $employes = $this->employeRepository->getByPrenomAndDossier($request['prenom'],$request['numdossier']);
        }elseif(!$request['nom'] && $request['prenom'] && $request['numdossier'] && $request['service_id']){
            $employes = $this->employeRepository->getByPrenomAndDossierAndSerivce($request['prenom'],$request['numdossier'],$request['service_id']);
        }
        elseif(!$request['nom'] && !$request['prenom'] && $request['numdossier'] && $request['service_id']){
            $employes = $this->employeRepository->getByDossierAndSerivce($request['numdossier'],$request['service_id']);
        }else{

            $employes = $this->employeRepository->getByAllParameter($request['nom'],$request['prenom'],$request['service_id'],$request['numdossier']);
        }
        return view('employe.index',compact('employes','services'));
    } */
    public function export(){
      //  return Excel::download(new EmployeExport, 'list.xlsx');
    }
    public function trancheAge($employe){

        $diff=0;

            $date1=date_create(date('Y-m-d'));
                $date2 =date_create($employe->datenaiss);
            $dif=date_diff($date1,$date2);
            $diff = $dif->format('%a')/365;
            if($diff < 25){
                return "moins25Ans";
            }
            elseif($diff >=25 && $diff < 30){
                return "entre25_30Ans";
            }
            elseif($diff >=30 && $diff < 35){
                return "entre30_35Ans";
            }
            elseif($diff >=35 && $diff < 40){
                return "entre35_40Ans";
            }
            elseif($diff >=40 && $diff < 45){
                return "entre40_45Ans";
            }
            elseif($diff >=45 && $diff < 50){
                return "entre45_50Ans";
            }
            elseif($diff >=50 && $diff < 55){
                return "entre50_55Ans";
            }
            elseif($diff >=55 && $diff < 60){
                return "entre55_60Ans";
            }
            else{
                return "entre60AnsPlus";
            }

    }
  public   function ajouterAnnees($date, $annees) {
        $nouvelle_date = date('Y-m-d', strtotime($date . " +$annees year"));
        return $nouvelle_date;
      }
      public function trancheAnxiente($employe){

        $diff=0;

            $date1=date_create(date('Y-m-d'));
                $date2 =date_create($employe->datefonction);
            $dif=date_diff($date1,$date2);
            $diff = $dif->format('%a')/365;
            if($diff < 5){
                return "moins5Ans";
            }
            elseif($diff >=5 && $diff < 10){
                return "entre5_10Ans";
            }
            elseif($diff >=10 && $diff < 15){
                return "entre10_15Ans";
            }
            elseif($diff >=15 && $diff < 20){
                return "entre15_20Ans";
            }
            elseif($diff >=20 && $diff < 25){
                return "entre20_25Ans";
            }
            elseif($diff >=25 && $diff < 30){
                return "entre25_30Ans";
            }
            elseif($diff >=30 && $diff < 35){
                return "entre30_35Ans";
            }
            elseif($diff >=35 && $diff < 40){
                return "entre35_40Ans";
            }
            elseif($diff >=40 && $diff < 45){
                return "entre40_45Ans";
            }
            elseif($diff >=45 && $diff < 50){
                return "entre44_50Ans";
            }
            else{
                return "entre50AnsPlus";
            }

    }
}
