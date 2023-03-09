<?php

namespace App\Http\Controllers;

use App\Repositories\CandidatRepository;
use App\Repositories\DocumentRepository;
use App\Repositories\EmployeRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    protected $documentRepository;
    protected $candidatRepository;
    protected $serviceRepository;
    protected $employeRepository;

    public function __construct(DocumentRepository $documentRepository, CandidatRepository $candidatRepository,
    ServiceRepository $serviceRepository,EmployeRepository $employeRepository){
        $this->documentRepository =$documentRepository;
        $this->candidatRepository = $candidatRepository;
        $this->serviceRepository = $serviceRepository;
        $this->employeRepository = $employeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = $this->documentRepository->getAll();
        return view('document.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidats = $this->candidatRepository->getAll();
        return view('document.add',compact('candidats'));
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
          //  'candidat_id'=> 'required|int'

        ],[
            'nom'=> 'Nom Obligatoire',
            'docs'=> 'Document obligatoire',
          //  'candidat_id'=> 'Le candidat est obligatoire',
        ]);
        $document = time().'.'.$request->docs->extension();
        $request->docs->move('clceorccis/', $document);
        $request->merge(['fichier'=>$document]);
        $documents = $this->documentRepository->store($request->all());
      //  dd($request->page);
        if($request['page']=='cdt'){
            $candidat = $this->candidatRepository->getCandidatWithRelation($request['candidat_id']);
            $services = $this->serviceRepository->getAll();
            return view('candidat.show',compact('candidat','services'));
        }else if($request->employe_id){
           // $employe = $this->employeRepository->getById($request['employe_id']);
            return redirect()->route('employe.show', ['employe' =>$request['employe_id']]);
        }else{
            return redirect('document');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = $this->documentRepository->getById($id);
        return view('document.show',compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = $this->documentRepository->getById($id);
        $candidats = $this->candidatRepository->getAll();
        return view('document.edit',compact('document','candidats'));
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
        $this->documentRepository->update($id, $request->all());
        return redirect('document');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->documentRepository->destroy($id);
        return redirect('document');
    }
}
