<?php

namespace App\Http\Controllers;

use App\Repositories\AutorisationRepository;
use App\Repositories\CandidatRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class AutorisationController extends Controller
{
    protected $autorisationRepository;
    protected $serviceRepository;
    protected $candidatRepository;

    public function __construct(AutorisationRepository $autorisationRepository, ServiceRepository $serviceRepository,
    CandidatRepository $candidatRepository){
        $this->autorisationRepository =$autorisationRepository;
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
        $autorisations = $this->autorisationRepository->getAll();
        return view('autorisation.index',compact('autorisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = $this->serviceRepository->getAll();
        $candidats = $this->candidatRepository->getAll();
        return view('autorisation.add',compact('services','candidats'));
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
            'fonction'=> 'required|string',
            'datedebut'=> 'required|date',
            'datefin'=> 'required|date',
            'duree'=> 'required|int',
            'service_id'=> 'required|int',
            'candidat_id'=> 'required|int',

        ],[
            'fontion.required' => 'Fonction du autorisation obligatoire',
            'datedebut'=> 'Date début obligatoire',
            'datefin'=> 'date fin obligatoire',
            'duree'=> 'duree obligatoire',
            'service_id'=> 'service obligatoire',
            'candidat_id'=> 'Le candidat est obligatoire',
        ]);
        $autorisations = $this->autorisationRepository->store($request->all());
        if($request['page']=='cdt'){
            $candidat = $this->candidatRepository->getCandidatWithRelation($request['candidat_id']);
            $services = $this->serviceRepository->getAll();
            return view('candidat.show',compact('candidat','services'));
        }else{
            return redirect('autorisation');

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
        $autorisation = $this->autorisationRepository->getAutorisationWithTableRelationById($id);
        $services = $this->serviceRepository->getAll();
        return view('autorisation.show',compact('autorisation','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autorisation = $this->autorisationRepository->getById($id);
        $services = $this->serviceRepository->getAll();
        $candidats = $this->candidatRepository->getAll();
        return view('autorisation.edit',compact('autorisation','services','candidats'));
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
        $this->autorisationRepository->update($id, $request->all());
        return redirect('autorisation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->autorisationRepository->destroy($id);
        return redirect('autorisation');
    }
}
