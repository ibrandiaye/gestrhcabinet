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
                        <h5 class="m-b-10">Détail d'un candidat</h5>
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
                    <form>
                        {{--  @foreach($autorisation->candidats as $autorisation->candidat)  --}}
                        @if($autorisation->candidat->photo)
                        <img class="img-radius" style="height: 60px" src="{{ asset('photo/'.$autorisation->candidat->photo) }}" alt="User-Profile-Image">
                        @endif
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Prenom Nom</label>
                            <div class="col-sm-6">
                                {{ $autorisation->candidat->prenom }} {{ $autorisation->candidat->nom }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Date et Lieu  Naissance</label>
                            <div class="col-sm-6">
                                {{  Carbon\Carbon::parse($autorisation->candidat->datenaiss)->format('d-m-Y') }}   à {{ $autorisation->candidat->lieunaiss }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Email</label>
                            <div class="col-sm-6">
                                {{ $autorisation->candidat->email }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Téléphone</label>
                            <div class="col-sm-6">
                                {{ $autorisation->candidat->tel }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Sexe</label>
                            <div class="col-sm-6">
                                {{ $autorisation->candidat->sexe }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Situation Matrimoniale</label>
                            <div class="col-sm-6">
                                {{ $autorisation->candidat->sm }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Dernier Diplôme</label>
                            <div class="col-sm-6">
                                <a href="{{ asset('diplome/'.$autorisation->candidat->diplome) }}">Diplôme</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">CV</label>
                            <div class="col-sm-6">
                                <a href="{{ asset('cv/'.$autorisation->candidat->cv) }}">CV</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bolder">Service</label>
                            <div class="col-sm-6">
                                {{ $autorisation->candidat->service->nom }}
                            </div>
                        </div>
                     {{--     @endforeach  --}}
                    </form>
                </div>
                <div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">

                </div>
                    <div class="form-group">
                        <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLong">Ajouter autorisation</button>


                        <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongDoc">Ajouter Document</button>

                    </div>
                <div class="col-xl-4 col-md-6">

                    <div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form id="validation-form123" action="{{ route('autorisation.store') }}" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Fonction</label>
                                                    <input type="text" class="form-control" value="{{ old('fonction') }}" name="fonction" placeholder="Fonction" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Date Début</label>
                                                    <input type="date" class="form-control" value="{{ old('datedebut') }}" name="datedebut" id="datedebut" placeholder="Date début" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Durée</label>
                                                    <input type="number" id="duree" class="form-control" value="{{ old('duree') }}" name="duree" placeholder="Durée" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Date Fin</label>
                                                    <input type="date" class="form-control" id="datefin" value="{{ old('datefin') }}" name="datefin" placeholder="Date Fin" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Service</label>
                                                    <select class="form-control" name="service_id" required>
                                                       <option value="">Veuillez choisir</option>
                                                       @foreach ($services as $service)
                                                       <option value="{{ $service->id }}">{{ $service->nom }}</option>
                                                       @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{ $autorisation->candidat->id }}" name="candidat_id">
                                            <input type="hidden" value="cdt" name="page">

                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn  btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

  </div>

            </div>
        </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Autorisation</h5>
                        <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
                            <i class="feather icon-edit"></i>
                        </button>
                    </div>
                    <div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">Fonction</label>
                                <div class="col-sm-6">
                                    {{ $autorisation->fonction  }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">Service</label>
                                <div class="col-sm-6">
                                    {{ $autorisation->service->nom }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">Date début</label>
                                <div class="col-sm-6">
                                    {{  Carbon\Carbon::parse($autorisation->datedebut)->format('d-m-Y') }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label font-weight-bolder">Date Fin</label>
                                <div class="col-sm-6">
                                    {{  Carbon\Carbon::parse($autorisation->datefin)->format('d-m-Y') }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <laubel class="col-sm-6 col-form-label font-weight-bolder">Durée</laubel>
                                <div class="col-sm-6">
                                    {{ $autorisation->duree }} mois
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                    </div>
                    <a  class="btn btn-primary" href="{{ route('prolonger.by.id', ['id'=>$autorisation->id ,'candidat'=>$autorisation->candidat->id]) }}">Prolonger</a>

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

