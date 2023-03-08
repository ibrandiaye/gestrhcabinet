<?php

namespace App\Http\Controllers;

use App\Repositories\ContratRepository;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    protected $contratRepository;

    public function __construct(ContratRepository $contratRepository){
        $this->contratRepository =$contratRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = $this->contratRepository->getAll();
        return view('contrat.index',compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrat.add');
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
        ],[
            'nom.required' => 'Nom du contrat obligatoire',
        ]);
        $contrats = $this->contratRepository->store($request->all());
        return redirect('contrat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrat = $this->contratRepository->getById($id);
        return view('contrat.show',compact('contrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrat = $this->contratRepository->getById($id);
        return view('contrat.edit',compact('contrat'));
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
        $this->contratRepository->update($id, $request->all());
        return redirect('contrat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contratRepository->destroy($id);
        return redirect('contrat');
    }
}
