<?php

namespace App\Http\Controllers;

use App\Repositories\FamilleRepository;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    protected $familleRepository;

    public function __construct(FamilleRepository $familleRepository){
        $this->familleRepository =$familleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familles = $this->familleRepository->getAll();
        return view('famille.index',compact('familles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('famille.add');
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
            'nom.required' => 'Nom du famille obligatoire',
        ]);
        $familles = $this->familleRepository->store($request->all());
        return redirect('famille');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $famille = $this->familleRepository->getById($id);
        return view('famille.show',compact('famille'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $famille = $this->familleRepository->getById($id);
        return view('famille.edit',compact('famille'));
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
        $this->familleRepository->update($id, $request->all());
        return redirect('famille');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->familleRepository->destroy($id);
        return redirect('famille');
    }
}
