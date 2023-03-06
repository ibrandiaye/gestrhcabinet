<?php

namespace App\Http\Controllers;

use App\CandidatExport;
use App\Repositories\AutorisationRepository;
use App\Repositories\CandidatRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CandidatController extends Controller
{
    protected $candidatRepository;
    protected $serviceRepository;
    protected $autorisationRepository;

    public function __construct(CandidatRepository $candidatRepository, ServiceRepository $serviceRepository,
    AutorisationRepository $autorisationRepository){
        $this->candidatRepository =$candidatRepository;
        $this->serviceRepository = $serviceRepository;
        $this->autorisationRepository = $autorisationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidats = $this->candidatRepository->getAll();
        $services = $this->serviceRepository->getAll();
        $nbAutorisations = $this->autorisationRepository->countReclamation();
        $maxReclama = 0;
        $virgule="";
        foreach ($nbAutorisations as $key => $nbAutorisation) {
            if($nbAutorisation->nb > $maxReclama)
                $maxReclama = $nbAutorisation->nb;
        }
       for ($i=0; $i < $maxReclama ; $i++) {
           $virgule = $virgule.",";
       }
        return view('candidat.index',compact('candidats','services','virgule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = $this->serviceRepository->getAll();
        return view('candidat.add',compact('services'));
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
            'sm'=> 'required|string',
            'diplomec'=> 'required|file|mimes:docx,pdf,doc,rtf',
            'service_id'=> 'required|string',
            'cvc'=> 'required|file|mimes:docx,pdf,doc,rtf',
        ],[
            'nom.required' => 'Nom  obligatoire',
            'prenom.required' => 'Prenom  obligatoire',
            'datenaiss.required' => 'Date Naissance  obligatoire',
            'lieunaiss.required' => 'Lieu de naissance  obligatoire',
            'email.required' => 'email  obligatoire',
            'sexe.required' => 'sexe  obligatoire',
            'sm.required' => 'Situation matrimoniale  obligatoire',
            'diplome.required' => 'diplome  obligatoire',
            'service_id.required' => 'Service  obligatoire',
            'cvc.required' => 'CV  obligatoire',
        ]);
        $diplomeName = time().'.'.$request->diplomec->extension();
        $request->diplomec->move('diplome/', $diplomeName);
        $request->merge(['diplome'=>$diplomeName]);

        $cvName = time().'.'.$request->cvc->extension();
        $request->cvc->move('cv/', $cvName);
        $request->merge(['cv'=>$cvName]);

        $tofff = time().'.'.$request->tof->extension();
        $request->tof->move('photo/', $tofff);
        $request->merge(['photo'=>$tofff]);

        $candidats = $this->candidatRepository->store($request->all());
        return redirect('candidat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidat = $this->candidatRepository->getCandidatWithRelation($id);
        $services = $this->serviceRepository->getAll();
        return view('candidat.show',compact('candidat','services'));
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
        $candidat = $this->candidatRepository->getById($id);
        return view('candidat.edit',compact('candidat','services'));
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
        $this->candidatRepository->update($id, $request->all());
        if($request->tof){
            $tofff = time().'.'.$request->tof->extension();
            $request->tof->move('photo/', $tofff);
            $request->merge(['photo'=>$tofff]);
        }
        if($request->cvc){
            $cvName = time().'.'.$request->cvc->extension();
            $request->cvc->move('cv/', $cvName);
            $request->merge(['cv'=>$cvName]);
        }
        if($request->diplomec){
            $diplomeName = time().'.'.$request->diplomec->extension();
            $request->diplomec->move('diplome/', $diplomeName);
            $request->merge(['diplome'=>$diplomeName]);
            }

        return redirect('candidat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidat = $this->candidatRepository->getById($id);
        $service = $candidat->service;
       // $candidat->service()->detach($service);
        foreach ($candidat->autorisations as $autorisation) {
        $autorisation->prolongations()->delete();
        }
        // $candidat->autorisations()->prolongations()->delete();
        $candidat->autorisations()->delete();
        $candidat->documents()->delete();
        $this->candidatRepository->destroy($id);
        return redirect('candidat');
    }
    public function search(Request $request){
        $services = $this->serviceRepository->getAll();
        if($request['nom'] && !$request['prenom'] && !$request['numdossier'] && !$request['service_id'] ){
            $candidats = $this->candidatRepository->getByNom($request['nom']);

        }elseif(!$request['nom'] && $request['prenom'] && !$request['numdossier'] && !$request['service_id']){
            $candidats = $this->candidatRepository->getByPrenom($request['prenom']);

        }elseif(!$request['nom'] && !$request['prenom'] && $request['numdossier'] && !$request['service_id']){
            $candidats = $this->candidatRepository->getByNumeroDossier($request['numdossier']);
        }elseif(!$request['nom'] && !$request['prenom'] && !$request['numdossier'] && $request['service_id']){
            $candidats = $this->candidatRepository->getByService($request['service_id']);
        } elseif($request['nom'] && !$request['prenom'] && !$request['numdossier'] && !$request['service_id'] ){
            $candidats = $this->candidatRepository->getByNom($request['nom']);

        }elseif($request['nom'] && $request['prenom'] && !$request['numdossier'] && !$request['service_id']){
            $candidats = $this->candidatRepository->getByNomAndPrenom($request['nom'],$request['prenom']);

        }
        elseif($request['nom'] && $request['prenom'] && $request['numdossier'] && !$request['service_id']){
            $candidats = $this->candidatRepository->getByNomAndPrenomDossier($request['nom'],$request['prenom'],$request['numdossier']);

        }
        elseif($request['nom'] && $request['prenom'] && !$request['numdossier'] && $request['service_id']){
            $candidats = $this->candidatRepository->getByNomAndPrenomService($request['nom'],$request['prenom'],$request['service_id']);

        }
    elseif($request['nom'] && !$request['prenom'] && $request['numdossier'] && !$request['service_id']){
        $candidats = $this->candidatRepository->getByNomAndDossier($request['nom'],$request['numdossier']);

    }elseif($request['nom'] && !$request['prenom'] && !$request['numdossier'] && $request['service_id']){
        $candidats = $this->candidatRepository->getByNomAndService($request['nom'],$request['service_id']);

    }elseif($request['nom'] && !$request['prenom'] && $request['numdossier'] && $request['service_id']){
        $candidats = $this->candidatRepository->getByNomAndDossierAndSerivce($request['nom'],$request['numdossier'],$request['service_id']);
    }elseif(!$request['nom'] && $request['prenom'] && $request['numdossier'] && !$request['service_id']){
            $candidats = $this->candidatRepository->getByPrenomAndDossier($request['prenom'],$request['numdossier']);
        }elseif(!$request['nom'] && $request['prenom'] && $request['numdossier'] && $request['service_id']){
            $candidats = $this->candidatRepository->getByPrenomAndDossierAndSerivce($request['prenom'],$request['numdossier'],$request['service_id']);
        }
        elseif(!$request['nom'] && !$request['prenom'] && $request['numdossier'] && $request['service_id']){
            $candidats = $this->candidatRepository->getByDossierAndSerivce($request['numdossier'],$request['service_id']);
        }else{

            $candidats = $this->candidatRepository->getByAllParameter($request['nom'],$request['prenom'],$request['service_id'],$request['numdossier']);
        }
        return view('candidat.index',compact('candidats','services'));
    }
    public function export(){
        return Excel::download(new CandidatExport, 'list.xlsx');
    }
}
