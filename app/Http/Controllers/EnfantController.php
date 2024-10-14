<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeRepository;
use App\Repositories\EnfantRepository;
use Illuminate\Http\Request;

class EnfantController extends Controller
{
    protected $enfantRepository;
    protected $employeRepository;

    public function __construct(EnfantRepository $enfantRepository, EmployeRepository $employeRepository){
        $this->enfantRepository =$enfantRepository;
        $this->employeRepository = $employeRepository;
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfants = $this->enfantRepository->getAll();
        return view('enfant.index',compact('enfants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = $this->employeRepository->getAll();
        return view('enfant.add',compact('employes'));
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
            'scolarite'=> 'required|string',
            'sexe'=> 'required|string',

        ],[
            'nom.required' => 'Nom  obligatoire',
            'prenom.required' => 'Prenom  obligatoire',
            'datenaiss.required' => 'Date Naissance  obligatoire',
            'lieunaiss.required' => 'Lieu de naissance  obligatoire',
            'scolarite.required' => 'email  obligatoire',
            'sexe.required' => 'sexe  obligatoire',

        ]);


        $enfant = $this->enfantRepository->store($request->all());
        return redirect()->route("employe.show",["employe"=>$enfant->employe_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //   $enfant = $this->enfantRepository->getEnfantWithRelation($id);
        $employes = $this->employeRepository->getAll();
        return view('enfant.show',compact('enfant','employes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employes = $this->employeRepository->getAll();
        $enfant = $this->enfantRepository->getById($id);
        return view('enfant.edit',compact('enfant','employes'));
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

        $this->enfantRepository->update($id,$request->all());
        return redirect()->route('enfant.employe',["id"=>$request["employe_id"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->enfantRepository->destroy($id);
        return redirect('enfant');
    }
   public function getEnfantByEmploye($id){
    $employe = $this->employeRepository->getById($id);
    $enfants = $this->enfantRepository->getEnfantByEmploye($id);
    return view("enfant.index",compact("enfants","employe"));
   }
}
