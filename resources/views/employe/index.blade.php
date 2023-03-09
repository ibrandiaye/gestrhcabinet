@extends('layout')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap4.min.css') }}">
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />

@endsection
@section('content')
<section class="pcoded-main-container">
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Liste des Employes</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('employe.index') }}">Employes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- Zero config table start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Employes</h5>
                </div>
                <div class="card-body">
                    {{--  <a href="{{ route('export.employe') }}" class="btn btn-primary"> Exporter</a>  --}}
                    {{--  <form action="{{ route('employe.search') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Prenom</label>
                                    <br><br>
                                        <select class="form-control selectsearch" name="prenom"  >
                                            <option value="">Veuillez choisir</option>
                                            @foreach ( $employes as $employe  )
                                            <option value="{{ $employe->prenom }}">{{ $employe->prenom }}</option>

                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Nom</label>
                                <br><br>
                                    <select class="form-control selectsearch" name="nom"  >
                                        <option value="">Veuillez choisir</option>
                                        @foreach ( $employes as $employe  )
                                        <option value="{{ $employe->nom }}">{{ $employe->nom }}</option>

                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Numéro Dossier</label>
                                <input type="text" class="form-control" name="numdossier" value="{{ old('numdossier') }}" placeholder="Numéro Dossier" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Service</label>
                                <br><br>
                                <select class="form-control selectsearch" name="service_id" >
                                   <option value="">Veuillez choisir</option>
                                   @foreach ($services as $service)
                                   <option value="{{ $service->id }}">{{ $service->nom }}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-4">

                        <button type="submit" class="btn  btn-primary">Rechercher</button>
                        </div>
                        <br><br>
                        </div>
                    </form>  --}}
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable1" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Matricle</th>
                                    <th>N° CNI</th>
                                    <th>PRENOM (S)</th>
                                    <th>Nom</th>
                                    <th>Sexe</th>
                                    <th>Date  Naissance</th>
                                    <th>Age</th>
                                    <th>TRANCHE AGE</th>
                                    <th>SITUATION MATRIMONIALE</th>
                                    <th>tel</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Categorie</th>
                                    <th>FAMILLE PROFESSIONNELLE</th>
                                    <th>Fonction</th>
                                    <th>DATE DE NOMINATION à la fonction</th>
                                    <th>Service</th>
                                    <th>DATE DE PRISE DE SERVICE</th>
                                    <th>Ancienneté</th>
                                    <th>TRANCHE ANCIENNETE</th>
                                    <th>NBRE D'ANNEES D'ACTIVITE</th>
                                    <th>Date Retraite</th>
                                    <th>NATURE CONTRAT</th>
                                    <th>TYPE DE CONTRAT</th>
                                    <th>Employeur</th>
                                    <th>Religion</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($employes as $employe)
                               <tr>
                                <td>{{ $employe->matricule }}</td>
                                <td>{{ $employe->cni }}</td>
                                   <td>{{ $employe->prenom }}</td>
                                   <td>{{ $employe->nom }}</td>
                                   <td>{{ $employe->sexe }}</td>

                                   <td>{{ Carbon\Carbon::parse($employe->datenaiss)->format('d-m-Y')   }}</td>
                                   <td>{{ $employe->age }}</td>
                                   <td>{{ $employe->trancheage }}</td>
                                   <td>{{ $employe->sm }}</td>
                                   <td>{{ $employe->tel }}</td>
                                   <td>{{ $employe->email }}</td>
                                   <td>{{ $employe->adresse }}</td>
                                   <td>{{ $employe->categorie->nom }}</td>
                                   <td>{{ $employe->famille->nom }}</td>
                                   <td>{{ $employe->fonction->nom }}</td>
                                   <td>{{ Carbon\Carbon::parse($employe->updated_at)->format('d-m-Y')   }}</td>
                                   <td>{{ $employe->service->nom }}</td>
                                   <td>{{ Carbon\Carbon::parse($employe->datefonction)->format('d-m-Y')   }}</td>
                                   <td>{{ $employe->anciennete }} ans</td>
                                   <td>{{ $employe->trancheanciennete }} </td>
                                   <td>{{ $employe->retraite }} ans</td>
                                   <td>{{ Carbon\Carbon::parse($employe->dateretraite)->format('d-m-Y')   }} </td>
                                   <td>{{ $employe->contrat->nom }} ans</td>
                                   <td>{{ $employe->typecontrat }}</td>
                                   <td>{{ $employe->employeur->nom }}</td>
                                   <td>{{ $employe->religion }}</td>
                                   <td> <a href="{{ route('employe.show', $employe->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('employe.edit', $employe->id) }}" role="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['employe.destroy', $employe->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                 </tr>

                               @endforeach
                            </tbody>
                              <tfoot>
                                <tr>
                                    <th>Matricle</th>
                                    <th>N° CNI</th>
                                    <th>PRENOM (S)</th>
                                    <th>Nom</th>
                                    <th>Sexe</th>
                                    <th>Date  Naissance</th>
                                    <th>Age</th>
                                    <th>TRANCHE AGE</th>
                                    <th>SITUATION MATRIMONIALE</th>
                                    <th>tel</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Categorie</th>
                                    <th>FAMILLE PROFESSIONNELLE</th>
                                    <th>Fonction</th>
                                    <th>DATE DE NOMINATION à la fonction</th>
                                    <th>Service</th>
                                    <th>DATE DE PRISE DE SERVICE</th>
                                    <th>Ancienneté</th>
                                    <th>TRANCHE ANCIENNETE</th>
                                    <th>NBRE D'ANNEES D'ACTIVITE</th>
                                    <th>Date Retraite</th>
                                    <th>NATURE CONTRAT</th>
                                    <th>TYPE DE CONTRAT</th>
                                    <th>Employeur</th>
                                    <th>Religion</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('js')
<script src=" {{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/data-basic-custom.js') }}"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('#simpletable1 tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });
            $('#simpletable1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                     'copy', 'csv', 'excel', 'pdf', 'print'
                   // 'csv'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
                },
                "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            initComplete: function () {
                // Apply the search
                this.api()
                    .columns()
                    .every(function () {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
            },
            } );
        });
        $(document).ready(function() {
            $('.selectsearch').select2();
        });

    </script>

@endsection
