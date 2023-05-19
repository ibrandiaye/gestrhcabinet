<?php

namespace App\Http\Controllers;

use App\Repositories\HierarchieRepository;
use Illuminate\Http\Request;

class HierarchieController extends Controller
{
    protected $hierarchieRepository;

    public function __construct(HierarchieRepository $hierarchieRepository){
        $this->hierarchieRepository =$hierarchieRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hierarchies = $this->hierarchieRepository->getAll();
        return view('hierarchie.index',compact('hierarchies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hierarchie.add');
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
            'nom.required' => 'Nom du hierarchie obligatoire',
        ]);
        $hierarchies = $this->hierarchieRepository->store($request->all());
        return redirect('hierarchie');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hierarchie = $this->hierarchieRepository->getById($id);
        return view('hierarchie.show',compact('hierarchie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hierarchie = $this->hierarchieRepository->getById($id);
        return view('hierarchie.edit',compact('hierarchie'));
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
        $this->hierarchieRepository->update($id, $request->all());
        return redirect('hierarchie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->hierarchieRepository->destroy($id);
        return redirect('hierarchie');
    }
}
