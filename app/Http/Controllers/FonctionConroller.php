<?php

namespace App\Http\Controllers;

use App\Repositories\FonctionRepository;
use Illuminate\Http\Request;

class FonctionConroller extends Controller
{
    protected $fonctionRepository;

    public function __construct(FonctionRepository $fonctionRepository){
        $this->fonctionRepository =$fonctionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fonctions = $this->fonctionRepository->getAll();
        return view('fonction.index',compact('fonctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fonction.add');
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
            'nom.required' => 'Nom du fonction obligatoire',
        ]);
        $fonctions = $this->fonctionRepository->store($request->all());
        return redirect('fonction');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fonction = $this->fonctionRepository->getById($id);
        return view('fonction.show',compact('fonction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fonction = $this->fonctionRepository->getById($id);
        return view('fonction.edit',compact('fonction'));
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
        $this->fonctionRepository->update($id, $request->all());
        return redirect('fonction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->fonctionRepository->destroy($id);
        return redirect('fonction');
    }
}
