<?php

namespace App\Http\Controllers;

use App\Repositories\CongeRepository;
use App\Repositories\EmployeRepository;
use App\Repositories\MobiliteRepository;
use Illuminate\Http\Request;

class CongeController extends Controller
{
    protected $congeRepository;
    protected $employeRepository;
    protected $mobiliteRepository;


    public function __construct(CongeRepository $congeRepository, EmployeRepository $employeRepository,
    MobiliteRepository $mobiliteRepository){
        $this->congeRepository =$congeRepository;
        $this->employeRepository = $employeRepository;
        $this->mobiliteRepository = $mobiliteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conges = $this->congeRepository->getAll();
        return view('conge.index',compact('conges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = $this->employeRepository->getAll();
        $mobilites = $this->mobiliteRepository->getAll();
        return view('conge.add',compact('employes','mobilites'));
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
            'mobilite_id'=> 'required|int',
            'datedebut'=> 'required|date',
          //  'datefin'=> 'required|date',
          //  'duree'=> 'required|int',
            'employe_id'=> 'required|int',

        ],[
            'raison.required' => 'Raison du conge obligatoire',
            'datedebut.required'=> 'Date début obligatoire',
           // 'datefin.required'=> 'date fin obligatoire',
         //s   'duree.required'=> 'duree obligatoire',
            'employe_id.required'=> 'employe obligatoire',
            'mobilite_id.required'=> 'mobilite_ obligatoire',
        ]);
        $conges = $this->congeRepository->store($request->all());

            return redirect()->route("conge.employe",["id"=>$conges->employe_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobilites = $this->mobiliteRepository->getAll();
       // $conge = $this->congeRepository->getCongeWithTableRelationByID($id);
        return view('conge.show',compact('conge','mobilites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conge = $this->congeRepository->getById($id);
        $employes = $this->employeRepository->getAll();
        $mobilites = $this->mobiliteRepository->getAll();
        return view('conge.edit',compact('conge','employes','mobilites'));
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
        $this->congeRepository->update($id, $request->all());
        return redirect('conge');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->congeRepository->destroy($id);
        return redirect('conge');
    }
    public function getCandidatId($id,$candidat){
        return view ('conge.addother',compact('id','candidat') );
    }
    public function createByEmploye($id)
    {
        $employe = $this->employeRepository->getById($id);
        $mobilites = $this->mobiliteRepository->getAll();
        return view('conge.addemploye',compact('employe','mobilites'));
    }
    public function getCongeByEmploye($id)
    {
        $conges = $this->congeRepository->getCongeByEmploye($id);
        return view('conge.index',compact('conges'));
    }
}
