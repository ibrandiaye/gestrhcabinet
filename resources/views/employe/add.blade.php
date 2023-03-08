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
                            <h5 class="m-b-10">Formulaire d'enregistrement employe</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Enregistrer un employe</a></li>
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
                        <form action="{{ route('employe.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label class="form-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" placeholder="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prenom</label>
                                        <input type="text" class="form-control" value="{{ old('prenom') }}" name="prenom" placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Naissance</label>
                                        <input type="date" class="form-control" name="datenaiss" value="{{ old('datenaiss') }}" placeholder="Date de Naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Lieu de Naissance</label>
                                        <input type="text" class="form-control" name="lieunaiss" value="{{ old('lieunaiss') }}" placeholder="Lieu de Naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" class="form-control" name="tel" value="{{ old('tel') }}" placeholder="Téléphone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" value="{{ old('adresse') }}" placeholder="adresse" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Cni</label>
                                        <input type="number" class="form-control" name="cni" value="{{ old('cni') }}" placeholder="Numéro CNI" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Religion</label>
                                        <input type="text" class="form-control" name="religion" value="{{ old('religion') }}" placeholder="Religion" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">SITUATION MATRIMONIALE</label>
                                        <select class="form-control" name="sm" required>
                                            <option value="" >Selectionner</option>

                                            <option value="Célibataire">Célibataire</option>
                                            <option value="Marié">Marié</option>
                                            <option value="Divorcé(e)">Divorcé(e)</option>
                                            <option value="Veuf(ve)">Veuf(ve)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">DATE DE PRISE DE SERVICE</label>
                                        <input type="date" class="form-control" name="datefonction" value="{{ old('datefonction') }}" placeholder="Date de prise fonction" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Sexe</label>
                                        <select class="form-control" name="sexe" required>
                                            <option value="" >Selectionner</option>
                                            <option value="homme">Homme</option>
                                           <option value="femme">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Matricule</label>
                                        <input type="text" class="form-control" name="matricule" value="{{ old('datedepot') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Age de retraite</label>
                                        <input type="number" class="form-control" name="retraite" value="{{ old('retraite') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Service</label>
                                        <select class="form-control" name="service_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($services as $service)
                                           <option value="{{ $service->id }}">{{ $service->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Famille</label>
                                        <select class="form-control" name="famille_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($familles as $famille)
                                           <option value="{{ $famille->id }}">{{ $famille->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Catégorie</label>
                                        <select class="form-control" name="categorie_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($categories as $categorie)
                                           <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fonction</label>
                                        <select class="form-control" name="fonction_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($fonctions as $fonction)
                                           <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">DATE DE NOMINATION A LA FONCTION</label>
                                        <input type="date" class="form-control" name="datenomination" value="{{ old('datenomination') }}" placeholder="Date de prise fonction" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employeur</label>
                                        <select class="form-control" name="employeur_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($employeurs as $employeur)
                                           <option value="{{ $employeur->id }}">{{ $employeur->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Contrat</label>
                                        <select class="form-control" name="contrat_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($contrats as $contrat)
                                           <option value="{{ $contrat->id }}">{{ $contrat->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type Contrat</label>
                                        <select class="form-control" name="typecontrat" required>
                                            <option value="">Veuillez choisir</option>
                                            <option value="permanent">permanent</option>
                                            <option value="prestataire">prestataire</option>
                                         </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn  btn-primary">Submit</button>
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
