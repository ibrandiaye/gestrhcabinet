<?php

namespace App\Http\Controllers;

use App\Repositories\DocenfantRepository;
use App\Repositories\EnfantRepository;
use Illuminate\Http\Request;

class DocenfantController extends Controller
{
    protected $docenfantRepository;
    protected $enfantRepository;


    public function __construct(DocenfantRepository $docenfantRepository, EnfantRepository $enfantRepository){
        $this->docenfantRepository =$docenfantRepository;
        $this->enfantRepository = $enfantRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docenfants = $this->docenfantRepository->getAll();
        return view('docenfant.index',compact('docenfants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enfants = $this->enfantRepository->getAll();
        return view('docenfant.add',compact('enfants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nom'=> 'required|string',
            'docs'=> 'required|file|mimes:docx,pdf,doc,xls,xlsx',
          //  'enfant_id'=> 'required|int'

        ],[
            'nom'=> 'Nom Obligatoire',
            'docs'=> 'Docenfant obligatoire',
          //  'enfant_id'=> 'Le enfant est obligatoire',
        ]);
        $docenfant = time().'.'.$request->docs->extension();
        $request->docs->move('documentenfant/', $docenfant);
        $request->merge(['fichier'=>$docenfant]);
        $docenfants = $this->docenfantRepository->store($request->all());
        $enfant = $this->enfantRepository->getById($docenfants->enfant_id);
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
        $docenfant = $this->docenfantRepository->getById($id);
        return view('docenfant.show',compact('docenfant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docenfant = $this->docenfantRepository->getById($id);
        $enfants = $this->enfantRepository->getAll();
        return view('docenfant.edit',compact('docenfant','enfants'));
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
        $this->docenfantRepository->update($id, $request->all());
        return redirect('docenfant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->docenfantRepository->destroy($id);
        return redirect('docenfant');
    }
}
