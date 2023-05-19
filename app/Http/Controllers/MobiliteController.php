<?php

namespace App\Http\Controllers;

use App\Repositories\MobiliteRepository;
use Illuminate\Http\Request;

class MobiliteController extends Controller
{
    protected $mobiliteRepository;

    public function __construct(MobiliteRepository $mobiliteRepository){
        $this->mobiliteRepository =$mobiliteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobilites = $this->mobiliteRepository->getAll();
        return view('mobilite.index',compact('mobilites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobilite.add');
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
            'duree'=> 'required|integer',
            'prolongement'=> 'integer',
        ],[
            'nom.required' => 'Nom du mobilite obligatoire',
            'duree.required' => 'duree
             du mobilite obligatoire',
            'duree.integer' => 'duree doit être un nombre',
            'prolongement.integer' => 'prolongement doit être un nombre',
        ]);
        $mobilites = $this->mobiliteRepository->store($request->all());
        return redirect('mobilite');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobilite = $this->mobiliteRepository->getById($id);
        //return view('mobilite.show',compact('mobilite'));
        return response()->json($mobilite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobilite = $this->mobiliteRepository->getById($id);
        return view('mobilite.edit',compact('mobilite'));
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
        $this->mobiliteRepository->update($id, $request->all());
        return redirect('mobilite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->mobiliteRepository->destroy($id);
        return redirect('mobilite');
    }
}
