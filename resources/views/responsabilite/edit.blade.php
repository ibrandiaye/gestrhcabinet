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
                            <h5 class="m-b-10">Formulaire de modification d'un responsabilite</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('responsabilite.index') }}">Liste des responsabilites</a></li>

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
                        {!! Form::model($responsabilite, ['method'=>'PATCH','route'=>['responsabilite.update', $responsabilite->id],'enctype'=>'multipart/form-data']) !!}
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
                                        <label class="form-label">Nom responsabilite</label>
                                        <input type="text" class="form-control" value="{{ $responsabilite->nom}}" name="nom" placeholder="Nom responsabilite" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Debut</label>
                                        <input type="date" class="form-control" value="{{ $responsabilite->debut }}"  name="debut"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Fin</label>
                                        <input type="date" class="form-control" value="{{ $responsabilite->fin }}"  name="fin"  >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employe</label>
                                        <select class="form-control" name="employe_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($employes as $employe)
                                           <option value="{{ $employe->id }}"  {{old('employe_id', $responsabilite->employe_id) == $employe->id ? 'selected' : ''}} >{{ $employe->prenom }} {{ $employe->nom }}</option>
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
@endsection
