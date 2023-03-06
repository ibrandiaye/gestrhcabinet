<?php

namespace App\Http\Controllers;

use App\Repositories\AutorisationRepository;
use App\Repositories\CandidatRepository;
use App\Repositories\ProlongationRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ProlongationController extends Controller
{
    protected $prolongationRepository;
    protected $autorisationRepository;
    protected $serviceRepository;
    protected $candidatRepository;

    public function __construct(ProlongationRepository $prolongationRepository, AutorisationRepository $autorisationRepository,
    ServiceRepository $serviceRepository, CandidatRepository $candidatRepository){
        $this->prolongationRepository =$prolongationRepository;
        $this->autorisationRepository = $autorisationRepository;
        $this->serviceRepository = $serviceRepository;
        $this->candidatRepository = $candidatRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prolongations = $this->prolongationRepository->getProlongationWithTableRelation();
        return view('prolongation.index',compact('prolongations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autorisations = $this->autorisationRepository->getAll();
        return view('prolongation.add',compact('autorisations'));
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
            'raison'=> 'required|string',
            'datedebut'=> 'required|date',
            'datefin'=> 'required|date',
            'duree'=> 'required|int',
            'autorisation_id'=> 'required|int',

        ],[
            'raison.required' => 'Raison du prolongation obligatoire',
            'datedebut'=> 'Date début obligatoire',
            'datefin'=> 'date fin obligatoire',
            'duree'=> 'duree obligatoire',
            'autorisation_id'=> 'autorisation obligatoire',
        ]);
        $prolongations = $this->prolongationRepository->store($request->all());
        if($request['page']=='cdt'){
            $candidat = $this->candidatRepository->getCandidatWithRelation($request['candidat_id']);
            $services = $this->serviceRepository->getAll();
            return view('candidat.show',compact('candidat','services'));
        }else{
            return redirect('prolongation');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = $this->serviceRepository->getAll();
        $prolongation = $this->prolongationRepository->getProlongationWithTableRelationByID($id);
        return view('prolongation.show',compact('prolongation','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prolongation = $this->prolongationRepository->getById($id);
        $autorisations = $this->autorisationRepository->getAll();
        return view('prolongation.edit',compact('prolongation','autorisations'));
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
        $this->prolongationRepository->update($id, $request->all());
        return redirect('prolongation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->prolongationRepository->destroy($id);
        return redirect('prolongation');
    }
    public function getCandidatId($id,$candidat){
        return view ('prolongation.addother',compact('id','candidat') );
    }
}
