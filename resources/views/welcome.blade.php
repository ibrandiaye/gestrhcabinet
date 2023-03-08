@extends('layout')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Accueil</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Accueil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
       {{--   <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-auto">
                            <i class="icon feather icon-book f-30 text-c-purple"></i>
                        </div>
                        <div class="col-auto">
                            <h6 class="text-muted m-b-10">Nombre Demandes</h6>
                            <h2 class="m-b-0">{{ $candidat }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-auto">
                            <i class="icon feather icon-navigation-2 f-30 text-c-green"></i>
                        </div>
                        <div class="col-auto">
                            <h6 class="text-muted m-b-10">Nombre d'Autorisations</h6>
                            <h2 class="m-b-0">{{ $autorisation }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-auto">
                            <i class="icon feather icon-navigation-2 f-30 text-c-green"></i>
                        </div>
                        <div class="col-auto">
                            <h6 class="text-muted m-b-10">Nombre prolongations</h6>
                            <h2 class="m-b-0">{{ $prolongation }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Marketing campaign</h5>
                </div>
                <div class="card-body">
                    <div id="traffic-chart1"></div>
                </div>
            </div>
        </div>
    </div>  --}}
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
@section('js')

<script>
    var candidat = {{ $candidat }};
    var autorisation = {{ $autorisation }};
    var prolongation = {{ $prolongation  }};
</script>
<!-- Apex Chart -->
<script src=" {{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>


<!-- custom-chart js -->
<script src=" {{ asset('assets/js/pages/dashboard-analytics.js') }} "></script>

@endsection
