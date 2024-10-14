<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeRepository;
use App\Repositories\ImputationRepository;
use Illuminate\Http\Request;

class ImputationController extends Controller
{ protected $imputationRepository;
    protected $employeRepository;


    public function __construct(ImputationRepository $imputationRepository, EmployeRepository $employeRepository){
        $this->imputationRepository =$imputationRepository;
        $this->employeRepository = $employeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imputations = $this->imputationRepository->getAll();
        return view('imputation.index',compact('imputations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = $this->employeRepository->getAll();
        return view('imputation.add',compact('employes'));
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
            'type'=> 'required|string',
            'taux'=> 'required|string',
           'destination'=> 'required|string',
            'beneficiaire'=> 'required|string',

        ],[
            'type.required' => 'Type obligatoire',
            'taux.required'=> 'Taux obligatoire',
            'destination.required'=> 'Destination obligatoire',
            'beneficiaire.required'=> 'Beneficiaire obligatoire',

        ]);
        $document = time().'.'.$request->docs->extension();
        $request->docs->move('docimputation/', $document);
        $request->merge(['doc'=>$document]);
        $imputation = $this->imputationRepository->store($request->all());

        return redirect()->route("employe.show",["employe"=>$imputation->employe_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $mobilites = $this->mobiliteRepository->getAll();
       $imputation = $this->imputationRepository->getById($id);
        return view('imputation.show',compact("imputation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imputation = $this->imputationRepository->getById($id);
        $employes = $this->employeRepository->getAll();
        return view('imputation.edit',compact('imputation','employes'));
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
        if($request['docs']){
            $document = time().'.'.$request->docs->extension();
            $request->docs->move('docimputation/', $document);
            $request->merge(['doc'=>$document]);
        }
        $this->imputationRepository->update($id, $request->all());
        return redirect()->route("imputation.employe",['id'=>$request["employe_id"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->imputationRepository->destroy($id);
        return redirect('imputation');
    }
    public function getImputationByEmploye($id){
        $employe = $this->employeRepository->getById($id);
        $imputations = $this->imputationRepository->getImputationByEmploye($id);
        return view("imputation.index",compact("imputations","employe"));
    }
}
