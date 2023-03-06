<?php

namespace App\Http\Controllers;

use App\Repositories\AutorisationRepository;
use App\Repositories\CandidatRepository;
use App\Repositories\ProlongationRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $autorisationRepository;
    protected $prolongationRepository;
    protected $candidatRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AutorisationRepository $autorisationRepository,ProlongationRepository $prolongationRepository,
    CandidatRepository $candidatRepository)
    {
        $this->middleware('auth');
        $this->autorisationRepository = $autorisationRepository;
        $this->prolongationRepository = $prolongationRepository;
        $this->candidatRepository =$candidatRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $candidat = $this->candidatRepository->getNbCandidat();
        $autorisation = $this->autorisationRepository->getNbAutorisation();
        $prolongation = $this->prolongationRepository->getNbProlongation();
        return view('welcome',compact('candidat','autorisation','prolongation'));
    }
}
