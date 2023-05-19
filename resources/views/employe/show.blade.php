@extends('layout')

@section('content')
<section class="pcoded-main-container">
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Détail d'un employe</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('document.index') }}">Les documents</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- Zero config table start -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Identification de l’agent </h5>
                    <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
                        <i class="feather icon-edit"></i>
                    </button>
                </div>
                <div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">

                        {{--  @foreach($employes as $employe)  --}}
                       {{--   @if($employe->photo)
                        <img class="img-radius" style="height: 60px" src="{{ asset('photo/'.$employe->photo) }}" alt="User-Profile-Image">
                        @endif
  --}}
                        <div class="form-group row">
                            <div class="col-sm-6  ">Matricule</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->matricule }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">CNI</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->cni }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">Prenom Nom</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->prenom }} {{ $employe->nom }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">Date et Lieu  Naissance</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{  Carbon\Carbon::parse($employe->datenaiss)->format('d-m-Y') }}   à {{ $employe->lieunaiss }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">Age</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->age }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">TRANCHE AGE</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->trancheage      }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">Sexe</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->sexe }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">Situation Matrimoniale</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->sm }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6  ">Email</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->email }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">Téléphone</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->tel }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">EMPLOYEUR</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->employeur->nom }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">NATURE CONTRAT</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->typecontrat }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">TYPE CONTRAT</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->contrat->nom }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">DATE DE PRISE DE SERVICE</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ Carbon\Carbon::parse($employe->datefonction)->format('d-m-Y')   }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">Ancienneté</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->anciennete }} ans
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">TRANCHE Ancienneté</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->trancheanciennete }} ans
                            </div>
                        </div>

                        <div class="form-group row">
                            <laubel class="col-sm-6  ">nombre d’années d’activité</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->retraite }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <laubel class="col-sm-6  ">Date Retraite</laubel>
                            <div class="col-sm-6 font-weight-bolder">
                                {{Carbon\Carbon::parse( $employe->dateretraite)->format('d-m-Y') }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">Religion</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->religion }}
                            </div>
                        </div>

                     {{--     @endforeach  --}}

                </div>
                <div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">

                </div>





            </div>
        </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Information sur le Poste occupé </h5>
                        <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
                            <i class="feather icon-edit"></i>
                        </button>
                    </div>
                    <div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
                        <div class="form-group row">
                            <div class="col-sm-6  ">Service</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->service->nom }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6  ">FAMILLE PROFESSIONNELLE</div>
                            <div class="col-sm-6 font-weight-bolder">
                                {{ $employe->famille->nom }}
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-sm-6  ">Catégorie socio-professionnelle</div>
                                <div class="col-sm-6">
                                    {{ $employe->categorie->nom  }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6  ">Hiérarchie</div>
                                <div class="col-sm-6">
                                    {{ $employe->hierarchie->nom  }}
                                </div>
                            </div>
                            @if(!empty($occupe->fonction))
                            <div class="form-group row">
                                <div class="col-sm-6  ">Fonction</div>
                                <div class="col-sm-6">
                                    {{ $occupe->fonction->nom }} <a href="{{ route('poste.employe', $employe->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-6  ">DATE DE NOMINATION à la fonction</div>
                                <div class="col-sm-6">
                                    {{ Carbon\Carbon::parse($occupe->updated_at)->format('d-m-Y')   }}
                                </div>
                            </div>
                            @endif
                            <div class="form-group row">
                                <div class="col-sm-6  ">Responsabilite</div>
                                <div class="col-sm-6">
                                    {{ $responsabilite->nom }} <a href="{{ route('responsabilite.employe', $employe->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>

                    </div>
                    <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                    </div>
                    <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongRes">Ajouter Responsabilite</button>
                    <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#exampleModalLongEmp">Ajouter Fonction</button>
                    <a  href="{{ route('create.conge.employe', ['id'=>$employe->id]) }}" class="btn  btn-danger">Ajouté Congé</a>
                    <a  href="{{ route('conge.employe', ['id'=>$employe->id]) }}" class="btn  btn-info">Voir congé</a>

                </div>
            </div>

            @if(sizeof($employe->documents) > 0)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Document</h5>
                        <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
                            <i class="feather icon-edit"></i>
                        </button>
                    </div>
                    <div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">

                            @foreach($employe->documents as $document)
                            <div class="form-group row">
                                <div class="col-sm-6  "> <a href="{{ asset('clceorccis/'.$document->fichier) }}">{{ $document->nom }}</a></div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            @endforeach
                            <div class="form-group">
                                <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongDoc">Ajouter Document</button>

                      </div>

                    </div>
                    <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                    </div>
                </div>
            </div>

            @endif





    </div>
</div>
<div id="exampleModalLongDoc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('document.save.employe') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                @csrf
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Nom document</label>
                <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Nom document" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Document</div>
                <input type="file" class="form-control"  name="docs"  required>
            </div>
        </div>
                    <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                    <input type="hidden" value="empl" name="page">

            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn  btn-primary">Enregistrer</button>
            </div>


        </div>
        </form>
    </div>

</div>

<div id="exampleModalLongRes" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Responsabilite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('responsabilite.store') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                    @csrf
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Nom </label>
                    <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Nom document" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Date Debut</label>
                    <input type="date" class="form-control"  name="debut"  required>
                </div>
            </div>
                        <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                    </div>

            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn  btn-primary">Enregistrer</button>
            </div>
            </form>
        </div>
    </div>
</div>
    <div id="exampleModalLongEmp" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ajouter =fonction occupé</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('occupe.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                        @csrf
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Fonction</label>
                                    <select class="form-control" name="fonction_id" required>
                                       <option value="">Veuillez choisir</option>
                                       @foreach ($fonctions as $fonction)
                                       <option value="{{ $fonction->id }}"   >{{ $fonction->nom }}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Date Debut</label>
                                    <input type="date" class="form-control"  name="debut"  required>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                        </div>

                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn  btn-primary">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
        </div>

</section>

@endsection
@section('js')
<!-- jquery-validation Js -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
<!-- form-picker-custom Js -->
<script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<script>
    $(document).ready(function () {

        $("#duree").keyup(function(){

           var date = $("#datedebut").val();
           var new_date = moment(date).add( $("#duree").val(), 'months');
           $("#datefin").val(new_date.format('YYYY-MM-DD'));
           console.log(new_date);
          });
    });
</script>
@endsection

