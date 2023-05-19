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
                            <h5 class="m-b-10">Formulaire d'enregistrement des conges</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('conge.create') }}">Enregistrer un conge</a></li>

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
                        <form id="validation-form123" action="{{ route('conge.store') }}" method="POST">
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
                                           <option value="{{ $mobilite->id }}">{{ $mobilite->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 duree">
                                    <div class="form-group ">
                                        <label class="form-label">Durée</label>
                                        <input type="number" id="duree" class="form-control" value="{{ old('duree') }}" name="duree" placeholder="Durée" >
                                    </div>
                                </div>
                                 <div class="col-md-6 maternite">
                                    <div class="form-group">
                                        <label class="form-label">Date probable d'Accouchement</label>
                                        <input type="date" class="form-control" value="{{ old('dateaccouchement') }}" name="dateaccouchement" id="dateaccouchement" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="form-label">Date de départ de congé</label>
                                        <input type="date" class="form-control" value="{{ old('datedebut') }}" name="datedebut" id="datedebut" placeholder="Date début" required>
                                    </div>
                                </div>
                                <div class="col-md-6 maternite">
                                    <div class="form-group">
                                        <label class="form-label">Date exacte d'Accouchement</label>
                                        <input type="date" class="form-control" value="{{ old('dateexactaccouchement') }}" name="dateexactaccouchement" id="dateexactaccouchement" >
                                    </div>
                                </div>
                                <div class="col-md-6 maternite">
                                    <div class="form-group ">
                                        <label class="form-label">Date de retour de congé</label>
                                        <input type="date" class="form-control" id="datefinp" value="{{ old('datefinp') }}" name="datefinp" placeholder="Date Fin" >
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label class="form-label">Date de Retour Définitif de congé</label>
                                        <input type="date" class="form-control" id="datefin" value="{{ old('datefin') }}" name="datefin" placeholder="Date Fin" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employe</label>
                                        <select class="form-control" name="employe_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($employes as $employe)
                                           <option value="{{ $employe->id }}">{{ $employe->prenom }} {{ $employe->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Enregistrer</button>
                        </form>
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
        $(".maternite").hide();
        $(".duree").hide();

      /*  $("#duree").keyup(function(){

           var date = $("#datedebut").val();
           var new_date = moment(date).add( $("#duree").val(), 'months');
           $("#datefin").val(new_date.format('YYYY-MM-DD'));
           console.log(new_date);
          });*/
            $("#mobilite_id").change(function(){
               var mobilite =  $("#mobilite_id").val();
               $.ajax({
            type:'GET',
            url:'/mobilite/'+mobilite,
            data:'_token = <?php echo csrf_token() ?>',
            success:function(data) {
              //  alert(data.nom);
                if(data.nom=='Congé de maternité'){
                    $(".duree").hide();
                    $(".maternite").show()
                    $("#dateaccouchement").on('change',function(){

                        var date = $("#dateaccouchement").val();
                       // var end_date = moment(date).add( 56, 'days');
                        var start_date =  moment(date).subtract( 42, 'days');
                       // $("#datefin").val(end_date.format('YYYY-MM-DD'));
                        $("#datedebut").val(start_date.format('YYYY-MM-DD'));
                       // console.log(end_date);
                       });
            }else{
                $(".maternite").hide();
                $(".duree").show()
                $("#duree").keyup(function(){

                    var date = $("#datedebut").val();
                    var new_date = moment(date).add( $("#duree").val(), 'days');
                    $("#datefin").val(new_date.format('YYYY-MM-DD'));
                   // moment(new_date, "MM-DD-YYYY");
                  //  console.log(new_date);
                   // $("#annee").val(new_date.format('YYYY'));
                   });
                   $("#datedebut").on('change',function(){
                    var date = $("#datedebut").val();
                    var new_date = moment(date).add( $("#duree").val(), 'days');
                    $("#datefin").val(new_date.format('YYYY-MM-DD'));
                   });
            }
            }
        });

          });
    });
</script>
@endsection
