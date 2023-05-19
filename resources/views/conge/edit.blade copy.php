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
                            <h5 class="m-b-10">Formulaire de Modification d'un conge</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('conge.index')}}">Lste  des conges</a></li>

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
                        <h5>Modifier Conge</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::model($conge, ['method'=>'PATCH','route'=>['conge.update', $conge->id]]) !!}
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
                                        <label class="form-label">Mobilite</label>
                                        <select class="form-control" id="mobilite_id" name="mobilite_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($mobilites as $mobilite)
                                           <option value="{{ $mobilite->id }}" {{ $mobilite->id==$conge->mobilite_id ? 'selected' : '' }}>{{ $mobilite->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if($conge->mobilite_id==1)
                                 <div class="col-md-6 maternite">
                                    <div class="form-group">
                                        <label class="form-label">Date probable d'Accouchement</label>
                                        <input type="date" class="form-control" value="{{ $conge->dateaccouchement}}" name="dateaccouchement" id="dateaccouchement" >
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 duree">
                                    <div class="form-group ">
                                        <label class="form-label">Durée</label>
                                        <input type="number" id="duree" class="form-control" value="{{ old('duree') }}" name="duree" placeholder="Durée" >
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date de départ de congé</label>
                                        <input type="date" class="form-control" value="{{ $conge->datedebut }}" name="datedebut" id="datedebut" placeholder="Date début" required>
                                    </div>
                                </div>
                                <div class="col-md-6 maternite">
                                    <div class="form-group">
                                        <label class="form-label">Date exacte d'Accouchement</label>
                                        <input type="date" class="form-control" value="{{ $conge->dateexactaccouchement }}" name="dateexactaccouchement" id="dateexactaccouchement" >
                                    </div>
                                </div>
                                <div class="col-md-6 maternite">
                                    <div class="form-group ">
                                        <label class="form-label">Date de retour de congé</label>
                                        <input type="date" class="form-control" id="datefinp" value="{{  $conge->datefinp }}" name="datefinp" placeholder="Date Fin" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date de Retour Définitif de congé</label>
                                        <input type="date" class="form-control" id="datefin" value="{{ $conge->datefin }}" name="datefin" placeholder="Date Fin" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employe</label>
                                        <select class="form-control" name="employe_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($employes as $employe)
                                           <option value="{{ $employe->id }}" {{ $employe->id==$conge->employe_id ? 'selected' : '' }}>{{ $employe->prenom }} {{ $employe->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if($conge->mobilite_id==1)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Complication (mère/enfant) ?</label>
                                        <select class="form-control" name="complication" id="complication">
                                            <option value="non" {{ $conge->complication=='non' ? 'selected' :'' }}>Non</option>
                                           <option value="oui"  {{ $conge->complication=='oui' ? 'selected' :'' }}>Oui</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
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
        var mobilite = $("#mobilite_id").val()
        if(mobilite==1){
            $("#dateaccouchement").on('change',function(){

                var date = $("#dateaccouchement").val();
               // var end_date = moment(date).add( 56, 'days');
                var start_date =  moment(date).subtract( 42, 'days');
               // $("#datefin").val(end_date.format('YYYY-MM-DD'));
                $("#datedebut").val(start_date.format('YYYY-MM-DD'));
              //  console.log(end_date);
               });
               $("#dateexactaccouchement").on('change',function(){

                var date = $("#dateexactaccouchement").val();
                var end_date = moment(date).add( 56, 'days');
               $("#datefinp").val(end_date.format('YYYY-MM-DD'));
               $("#datefin").val(end_date.format('YYYY-MM-DD'));
              //  console.log(end_date);
               });
                var date = $("#datedebut").val()
                var dateaccouchement = moment(date).add(42, 'days');
                $("#dateaccouchement").val(dateaccouchement.format('YYYY-MM-DD'));
                if($("#complication").val()=='oui'){
                    $("#complication").prop('disabled', true);
        }
        $("#complication").on('change',function(){

            var complication = $("#complication").val();
            if(complication=='oui'){
                var date = $("#datefin").val()
                var end_date = moment(date).add( 21, 'days');
                $("#datefin").val(end_date.format('YYYY-MM-DD'));
            }else{
                var date = $("#datefin").val()
                var end_date = moment(date).subtract( 21, 'days');
                $("#datefin").val(end_date.format('YYYY-MM-DD'));
            }

           });
        }else{
            var debut = moment($("#datedebut").val());
            var fin = moment($("#datefin").val());
            $("#duree").val(fin.diff(debut, 'days'))
            $("#duree").keyup(function(){

                var date = $("#datedebut").val();
                var new_date = moment(date).add( $("#duree").val(), 'days');
                $("#datefin").val(new_date.format('YYYY-MM-DD'));
               // moment(new_date, "MM-DD-YYYY");
              //  console.log(new_date);
               // $("#annee").val(new_date.format('YYYY'));
               });
        }
    });
</script>
@endsection
