<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeRepository;
use App\Repositories\FonctionRepository;
use App\Repositories\OccupeRepository;
use Illuminate\Http\Request;

class OccupeController extends Controller
{
    protected $occupeRepository;
    protected $employeRepository;
    protected $fonctionRepository;
    public function __construct(OccupeRepository $occupeRepository,
    EmployeRepository $employeRepository,FonctionRepository $fonctionRepository){
        $this->occupeRepository =$occupeRepository;
        $this->employeRepository = $employeRepository;
        $this->fonctionRepository = $fonctionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupes = $this->occupeRepository->getAll();
        return view('occupe.index',compact('occupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('occupe.add');
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
            'fonction_id'=> 'required|int',
            'debut'=> 'required|date',
            'fin'=> 'date',
            'employe_id'=> 'required|int',
        ],[
            'fonction_id.required' => 'Nom du occupe obligatoire',
            'debut.required'=> 'Date debut Obligatoire',
            'employe_id.required'=> 'Employé Obligatoire',
        ]);
        $occupe = $this->occupeRepository->store($request->all());
        return redirect()->route("employe.show",["employe"=>$occupe->employe_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occupe = $this->occupeRepository->getById($id);
        return view('occupe.show',compact('occupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occupe = $this->occupeRepository->getById($id);
        $employes = $this->employeRepository->getAll();
        $fonctions = $this->fonctionRepository->getAll();
        return view('occupe.edit',compact('occupe','employes','fonctions'));
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
        $this->occupeRepository->update($id, $request->all());
        return redirect('occupe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->occupeRepository->destroy($id);
        return redirect('occupe');
    }
    public function getByEmploye($id){
        $employe = $this->employeRepository->getById($id);
        $occupes = $this->occupeRepository->getByEmploye($id);
        return view("occupe.index",compact("occupes","employe"));
    }
}
