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
                            <h5 class="m-b-10">Formulaire de Modification d'un autorisation</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('autorisation.index')}}">Lste  des autorisations</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Validation</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::model($autorisation, ['method'=>'PATCH','route'=>['autorisation.update', $autorisation->id]]) !!}
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
                                        <input type="text" class="form-control" value="{{ $autorisation->fonction }}" name="nom" placeholder="Nom autorisation" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Début</label>
                                        <input type="date" class="form-control" value="{{ $autorisation->datedebut}}" name="datedebut" id="datedebut" placeholder="Date début" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Durée</label>
                                        <input type="number" id="duree" class="form-control" value="{{ $autorisation->duree}}" name="duree" placeholder="Durée" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Fin</label>
                                        <input type="date" class="form-control" id="datefin" value="{{ $autorisation->datefin}}" name="datefin" placeholder="Date Fin" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Service</label>
                                        <select class="form-control" name="service_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($services as $service)
                                           <option value="{{ $service->id }}" {{old('service_id', $autorisation->service_id) == $service->id ? 'selected' : ''}} >{{ $service->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Candidat</label>
                                        <select class="form-control" name="candidat_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($candidats as $candidat)
                                           <option value="{{ $candidat->id }}" {{old('candidat_id', $autorisation->candidat_id) == $candidat->id ? 'selected' : ''}} >{{ $candidat->prenom }} {{ $candidat->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Enregistrer</button>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
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
           /*date.setDate(date.getDate()+ $("#duree").val());
          // console.log("dayEnd : " +date);
           var duree = $("#duree").val();
           duree = duree + 0;
           if(duree > 0){
            date.setDate(date.getDate()+document.getElementById('duree').value);
            console.log(date);
            $("#datefin").val(date.getFullYear()+'-'+date.getMonth() +
            '-'+date.getDate());
        }
        */


          });
    });
</script>
@endsection
