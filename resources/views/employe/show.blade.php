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
                    <h5 class="mb-0">Personal details</h5>
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
                            <label class="col-sm-6 col-form-label font-weight-bolder">Matricule</label>
                            <div class="col-sm-6">
                                {{ $employe->matricule }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">CNI</label>
                            <div class="col-sm-6">
                                {{ $employe->cni }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Prenom Nom</label>
                            <div class="col-sm-6">
                                {{ $employe->prenom }} {{ $employe->nom }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Date et Lieu  Naissance</label>
                            <div class="col-sm-6">
                                {{  Carbon\Carbon::parse($employe->datenaiss)->format('d-m-Y') }}   à {{ $employe->lieunaiss }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Email</label>
                            <div class="col-sm-6">
                                {{ $employe->email }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Téléphone</label>
                            <div class="col-sm-6">
                                {{ $employe->tel }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Sexe</label>
                            <div class="col-sm-6">
                                {{ $employe->sexe }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Situation Matrimoniale</label>
                            <div class="col-sm-6">
                                {{ $employe->sm }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Religion</label>
                            <div class="col-sm-6">
                                {{ $employe->religion }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Service</label>
                            <div class="col-sm-6">
                                {{ $employe->service->nom }}
                            </div>
                        </div>
                     {{--     @endforeach  --}}

                </div>
                <div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">

                </div>
                    <div class="form-group">
                              <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongDoc">Ajouter Document</button>

                    </div>
                <div class="col-xl-4 col-md-6">

  </div>

            </div>
        </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Information</h5>
                        <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
                            <i class="feather icon-edit"></i>
                        </button>
                    </div>
                    <div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">

                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">Categorie</label>
                                <div class="col-sm-6">
                                    {{ $employe->categorie->nom  }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">FAMILLE PROFESSIONNELLE</label>
                                <div class="col-sm-6">
                                    {{ $employe->famille->nom }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">Fonction</label>
                                <div class="col-sm-6">
                                    {{ $employe->fonction->nom }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">DATE DE NOMINATION à la fonction</label>
                                <div class="col-sm-6">
                                    {{ Carbon\Carbon::parse($employe->updated_at)->format('d-m-Y')   }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">DATE DE PRISE DE SERVICE</laubel>
                                <div class="col-sm-6">
                                    {{ Carbon\Carbon::parse($employe->datefonction)->format('d-m-Y')   }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">Ancienneté</laubel>
                                <div class="col-sm-6">
                                    {{ $employe->anciennete }} ans
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">TRANCHE ANCIENNETE</laubel>
                                <div class="col-sm-6">
                                    {{ $employe->trancheanciennete }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">Date Retraite</laubel>
                                <div class="col-sm-6">
                                    {{ $employe->retraite }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">NATURE CONTRAT</laubel>
                                <div class="col-sm-6">
                                    {{ $employe->typecontrat }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">{{ $employe->employeur->nom }}</laubel>
                                <div class="col-sm-6">
                                    {{ $employe->typecontrat }}
                                </div>
                            </div>
                    </div>
                    <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                    </div>
                    {{--  <a  class="btn btn-primary" href="{{ route('prolonger.by.id', ['id'=>$autorisation->id ,'employe'=>$employe->id]) }}">Prolonger</a>  --}}

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
                                <label class="col-sm-6 col-form-label font-weight-bolder">Nom Document</label>
                                <div class="col-sm-6">
                                    <a href="{{ asset('clceorccis/'.$document->fichier) }}">{{ $document->nom }}</a>
                                </div>
                            </div>
                            @endforeach

                    </div>
                    <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                    </div>
                </div>
            </div>

            @endif
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-6">

    <div id="exampleModalLongDoc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label">Document</label>
                        <input type="file" class="form-control"  name="docs"  required>
                    </div>
                </div>
                            <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                            <input type="hidden" value="empl" name="page">
                        </div>

                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn  btn-primary">Enregistrer</button>
                </div>
                </form>
            </div>
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

