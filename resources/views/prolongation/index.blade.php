@extends('layout')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap4.min.css') }}">
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
                        <h5 class="m-b-10">Liste des prolongations</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('prolongation.index') }}">Les prolongations</a></li>
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
                    <h5>prolongations</h5>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Numero Dossier</th>
                                    <th>service</th>
                                    <th>Raison</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Durée</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                               @foreach ($prolongations as $prolongation)
                               <tr>
                                <td>{{ $prolongation->id }}</td>
                                <td>{{ $prolongation->autorisation->candidat->prenom }}  {{ $prolongation->autorisation->candidat->nom }} </td>
                                <td>{{ $prolongation->autorisation->candidat->numdossier }}</td>
                                <td>{{ $prolongation->autorisation->service->nom }}</td>
                                <td>{{ $prolongation->raison }} </td>
                                <td>{{ $prolongation->datedebut }}</td>
                                <td>{{ $prolongation->datefin }}</td>
                                <td>{{ $prolongation->duree }} mois</td>
                                <td> <a href="{{ route('prolongation.show', $prolongation->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                 <a href="{{ route('prolongation.edit', $prolongation->id) }}" role="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                 {!! Form::open(['method' => 'DELETE', 'route'=>['prolongation.destroy', $prolongation->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                  <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                  {!! Form::close() !!}  </td>
                               </tr>

                               @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Numero Dossier</th>
                                    <th>service</th>
                                    <th>Raison</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Durée</th>
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
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/data-basic-custom.js') }}"></script>
@endsection
