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
                        <h5 class="m-b-10">Liste des Mobilites</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('mobilite.index') }}">Mobilites</a></li>
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
                    <h5>Mobilites</h5>
                </div>
                <div class="card-body">

                    <div class="dt-responsive table-responsive">
                        <table id="simpletable1" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Duree</th>
                                    <th>Prolongement</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($mobilites as $mobilite)
                               <tr>
                                <td>{{ $mobilite->nom }}</td>
                                   <td>{{ $mobilite->duree }}</td>
                                   <td>{{ $mobilite->prolongement }}</td>
                                    <td>  {{--<a href="{{ route('mobilite.show', $mobilite->id) }}" role="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>  --}}
                                    <a href="{{ route('mobilite.edit', $mobilite->id) }}" role="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['mobilite.destroy', $mobilite->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                   </td>
                                 </tr>

                               @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom</th>
                                    <th>Duree</th>
                                    <th>Prolongement</th>
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
