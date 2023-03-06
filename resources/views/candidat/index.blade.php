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
                        <h5 class="m-b-10">Liste des Candidats</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('candidat.index') }}">Candidats</a></li>
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
                    <h5>Candidats</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('export.candidat') }}" class="btn btn-primary"> Exporter</a>
                    <form action="{{ route('candidat.search') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Prenom</label>
                                    <br><br>
                                        <select class="form-control selectsearch" name="prenom"  >
                                            <option value="">Veuillez choisir</option>
                                            @foreach ( $candidats as $candidat  )
                                            <option value="{{ $candidat->prenom }}">{{ $candidat->prenom }}</option>

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
                                        @foreach ( $candidats as $candidat  )
                                        <option value="{{ $candidat->nom }}">{{ $candidat->nom }}</option>

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
                    </form>
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable1" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Numéro dossier</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Date  Naissance</th>
                                    <th>Lieu de Naissance</th>
                                    <th>Sexe</th>
                                    <th>Situation Matrimoniale</th>
                                    <th>tel</th>
                                    <th>Email</th>
                                    <th>Dernier Diplôme / Qualification</th>
                                    <th>Date Dépot</th>
                                    <th>Autorisation
                                        <span>
                                            {{ $virgule }}
                                        </span>

                                    </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($candidats as $candidat)
                               <tr>
                                <td>{{ $candidat->numdossier }}</td>
                                   <td>{{ $candidat->prenom }}</td>
                                   <td>{{ $candidat->nom }}</td>
                                   <td>{{ $candidat->datenaiss }}</td>
                                   <td>{{ $candidat->lieunaiss }}</td>
                                   <td>{{ $candidat->sexe }}</td>
                                   <td>{{ $candidat->sm }}</td>
                                   <td>{{ $candidat->tel }}</td>
                                   <td>{{ $candidat->email }}</td>
                                   <td>@if ($candidat->qualification)
                                    $candidat->qualification
                                   @else
                                   <a href="{{ asset('diplome/'.$candidat->diplome) }}">Diplôme</a>
                                   @endif </td>
                                   <td>{{ Carbon\Carbon::parse($candidat->datedepot)->format('d-m-Y')  }}</td>
                                   <th>
                                    <span>
                                        {{ $virgule }}
                                    </span>
                                   <td> <a href="{{ route('candidat.show', $candidat->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('candidat.edit', $candidat->id) }}" role="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['candidat.destroy', $candidat->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                 </tr>

                               @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Numéro dossier</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Date  Naissance</th>
                                    <th>Lieu de Naissance</th>
                                    <th>Sexe</th>
                                    <th>Situation Matrimoniale</th>
                                    <th>tel</th>
                                    <th>Email</th>
                                    <th>Dernier Diplôme / Qualification</th>
                                    <th>Date Dépot</th>
                                    <th>Action</th>
                                    <th>Autorisation
                                        <span>
                                           {{ $virgule }}
                                        </span>

                                    </th>
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
            $('#simpletable1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                    'csv'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
                },
                "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
            } );
        });
        $(document).ready(function() {
            $('.selectsearch').select2();
        });

    </script>

@endsection
