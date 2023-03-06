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
                            <h5 class="m-b-10">Formulaire de modification candidat</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Modifier un candidat</a></li>
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
                        {!! Form::model($candidat, ['method'=>'PATCH','route'=>['candidat.update', $candidat->id]]) !!}
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
                                        <label class="form-label">Nom Service</label>
                                        <input type="text" class="form-control" name="nom" value="{{ $candidat->nom }}" placeholder="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prenom</label>
                                        <input type="text" class="form-control" value="{{ $candidat->prenom }}" name="prenom" placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Naissance</label>
                                        <input type="date" class="form-control" name="datenaiss" value="{{ $candidat->datenaiss }}" placeholder="Date de Naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Lieu de Naissance</label>
                                        <input type="text" class="form-control" name="lieunaiss" value="{{ $candidat->lieunaiss }}" placeholder="Lieu de Naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $candidat->email }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" class="form-control" name="tel" value="{{ $candidat->tel }}" placeholder="Téléphone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Sexe</label>
                                        <select class="form-control" name="sexe" required>
                                           <option value="homme">Homme</option>
                                           <option value="femme">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Situation matrimoniale</label>
                                        <select class="form-control" name="sm" required>
                                            <option value="">Sélectionnez</option>
                                           <option value="Célibataire" {{ $candidat->sm== 'Célibataire' ? 'selected' : ''}} >Célibataire</option>
                                           <option {{ $candidat->sm== 'Marié' ? 'selected' : ''}} value="Marié">Marié</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Service</label>
                                        <select class="form-control" name="service_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($services as $service)
                                           <option {{old('service_id', $candidat->service_id) == $service->id ? 'selected' : ''}} value="{{ $service->id }}">{{ $service->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date dépôt</label>
                                        <input type="date" class="form-control" name="datedepot" value="{{ $candidat->datedepot }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Numéro Dossier</label>
                                        <input type="text" class="form-control" name="numdossier" value="{{ $candidat->numdossier }}" placeholder="Numéro Dossier" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Dernière diplome</label>
                                        <input type="file" class="validation-file" name="diplomec" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Qualification</label>
                                        <input type="text" class="form-control" name="qualification" value="{{ $candidat->qualification }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Votre CV</label>
                                        <input type="file" class="validation-file" name="cvc" >
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Submit</button>
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
@endsection
