<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeRepository;
use App\Repositories\ResponsabiliteRepository;
use Illuminate\Http\Request;

class ResponsabiliteController extends Controller
{
    protected $responsabiliteRepository;
    protected $employeRepository;
    public function __construct(ResponsabiliteRepository $responsabiliteRepository,
    EmployeRepository $employeRepository){
        $this->responsabiliteRepository =$responsabiliteRepository;
        $this->employeRepository = $employeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsabilites = $this->responsabiliteRepository->getAll();
        return view('responsabilite.index',compact('responsabilites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsabilite.add');
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
            'debut'=> 'required|date',
            'fin'=> 'date',
            'employe_id'=> 'required|int',
        ],[
            'nom.required' => 'Nom du responsabilite obligatoire',
            'debut.required'=> 'Date debut Obligatoire',
            'employe_id.required'=> 'Employé Obligatoire',
        ]);
        $responsabilite = $this->responsabiliteRepository->store($request->all());
        return redirect()->route("employe.show",["employe"=>$responsabilite->employe_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsabilite = $this->responsabiliteRepository->getById($id);
        return view('responsabilite.show',compact('responsabilite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsabilite = $this->responsabiliteRepository->getById($id);
        $employes = $this->employeRepository->getAll();
        return view('responsabilite.edit',compact('responsabilite','employes'));
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
        $this->responsabiliteRepository->update($id, $request->all());
        return redirect('responsabilite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->responsabiliteRepository->destroy($id);
        return redirect('responsabilite');
    }
    public function getByEmploye($id){
        $responsabilites = $this->responsabiliteRepository->getByEmploye($id);
        return view("responsabilite.index",compact("responsabilites"));
    }
}
