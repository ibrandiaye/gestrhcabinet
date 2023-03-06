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
                        <h5 class="m-b-10">Liste des autorisations</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('autorisation.index') }}">Les autorisations</a></li>
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
                    <h5>autorisations</h5>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Candidat</th>
                                     <th>Fonction</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Durée</th>
                                     <th>service</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                               @foreach ($autorisations as $key=> $autorisation)
                               <tr>
                                <td>{{ $autorisation->id }}</td>
                                <td>{{ $autorisation->candidat->prenom }} {{ $autorisation->candidat->nom }}</td>
                                <td>{{ $autorisation->fonction }}</td>
                                <td>{{ $autorisation->datedebut }}</td>
                                <td>{{ $autorisation->datefin }}</td>
                                <td>{{ $autorisation->duree }} mois</td>
                                <td>{{ $autorisation->service->nom }}</td>
                                <td> <a href="{{ route('autorisation.show', $autorisation->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                 <a href="{{ route('autorisation.edit', $autorisation->id) }}" role="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                 {!! Form::open(['method' => 'DELETE', 'route'=>['autorisation.destroy', $autorisation->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                  <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                  {!! Form::close() !!}  </td>
                               </tr>

                               @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Candidat</th>
                                     <th>Fonction</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Durée</th>
                                     <th>service</th>
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
