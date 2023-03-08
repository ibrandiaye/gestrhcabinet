<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeurRepository;
use Illuminate\Http\Request;

class EmployeurController extends Controller
{
    protected $employeurRepository;

    public function __construct(EmployeurRepository $employeurRepository){
        $this->employeurRepository =$employeurRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeurs = $this->employeurRepository->getAll();
        return view('employeur.index',compact('employeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeur.add');
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
            'nom.required' => 'Nom du employeur obligatoire',
        ]);
        $employeurs = $this->employeurRepository->store($request->all());
        return redirect('employeur');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeur = $this->employeurRepository->getById($id);
        return view('employeur.show',compact('employeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeur = $this->employeurRepository->getById($id);
        return view('employeur.edit',compact('employeur'));
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
        $this->employeurRepository->update($id, $request->all());
        return redirect('employeur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->employeurRepository->destroy($id);
        return redirect('employeur');
    }
}
