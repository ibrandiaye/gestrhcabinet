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
                        <h5 class="m-b-10">Employe : {{ $employe->prenom }} {{ $employe->nom }}</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('enfant.index') }}">Les Fonctions enfants</a></li>
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
                    <h5>enfants</h5>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>date et lieu naissance</th>
                                    <th>sexe</th>
                                    <th>scolarité</th>
                                    <th>documents</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                               @foreach ($enfants as $enfant)
                               <tr>
                                <td>{{ $enfant->id }}</td>
                                <td>{{ $enfant->prenom }}</td>
                                <td>{{ $enfant->nom }}</td>
                                <td>{{  Carbon\Carbon::parse( $enfant->datenaiss)->format('d-m-Y')  }} <br> à {{ $enfant->lieunaiss }}</td>
                                <td>{{ $enfant->sexe }}</td>
                                <td> {{ $enfant->scolarite }}
                                </td>
                                <td>@if(count($enfant->docenfants) > 0)
                                    <ul>
                                    @foreach ($enfant->docenfants as $docenfant)

                                            <li> <a href="{{ asset('documentenfant/'.$docenfant->fichier) }}">{{ $docenfant->nom }}</a></li>

                                    @endforeach
                                </ul>
                                    @endif
                                </td>
                                <td>
                                 <a href="{{ route('enfant.edit', $enfant->id) }}" role="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                {{--   {!! Form::open(['method' => 'DELETE', 'route'=>['enfant.destroy', $enfant->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                  <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                  {!! Form::close() !!}  --}}  </td>
                               </tr>

                               @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>date et lieu naissance</th>
                                    <th>sexe</th>
                                    <th>scolarité</th>
                                    <th>documents</th>
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
