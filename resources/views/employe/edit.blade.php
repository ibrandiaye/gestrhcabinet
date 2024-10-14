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
                            <h5 class="m-b-10">Formulaire de modification employe</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Modifier un employe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Validation</h5>
                    </div>
                    <div class="card-body">
                    {!! Form::model($employe, ['method'=>'PATCH','route'=>['employe.update', $employe->id]]) !!}
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
                                        <input type="text" class="form-control" name="nom" value="{{ $employe->nom}}" placeholder="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prenom</label>
                                        <input type="text" class="form-control" value="{{ $employe->prenom}}" name="prenom" placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Naissance</label>
                                        <input type="date" class="form-control" name="datenaiss" value="{{ $employe->datenaiss}}" placeholder="Date de Naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Lieu de Naissance</label>
                                        <input type="text" class="form-control" name="lieunaiss" value="{{ $employe->lieunaiss}}" placeholder="Lieu de Naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $employe->email}}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" class="form-control" name="tel" value="{{ $employe->tel}}" placeholder="Téléphone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" value="{{ $employe->adresse}}" placeholder="adresse" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Cni</label>
                                        <input type="number" class="form-control" name="cni" value="{{ $employe->cni}}" placeholder="Numéro CNI" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Religion</label>
                                        <input type="text" class="form-control" name="religion" value="{{ $employe->religion}}" placeholder="Religion" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">DATE DE PRISE DE SERVICE</label>
                                        <input type="date" class="form-control" name="datefonction" value="{{ $employe->datefonction}}" placeholder="Date de prise fonction" required>
                                    </div>
                                </div>
                               {{--   <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Photo</label>
                                        <input type="file" class="validation-file form-control" name="tof" >
                                    </div>
                                </div>  --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Sexe</label>
                                        <select class="form-control" name="sexe" required>
                                           <option value="homme"  {{ $employe->sexe== 'homme' ? 'selected' : ''}}>Homme</option>
                                           <option value="femme" {{ $employe->sexe== 'femme' ? 'selected' : ''}}>Femme</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Situation matrimoniale</label>
                                        <select class="form-control" name="sm" required>
                                            <option value="" >Selectionner</option>
                                            <option value="Célibataire" {{ $employe->sm=='Célibataire' ? 'selected' : '' }}>Célibataire</option>
                                            <option value="Marié" {{ $employe->sm=='Marié' ? 'selected' : '' }}>Marié</option>
                                            <option value="Divorcé(e)" {{ $employe->sm=='Divorcé(e)' ? 'selected' : '' }}>Divorcé(e)</option>
                                            <option value="Veuf(ve)" {{ $employe->sm=='Veuf(ve)' ? 'selected' : '' }}>Veuf(ve)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Groupe Sanguin</label>
                                        <select class="form-control" name="groupesanguin" >
                                            <option value="" >Selectionner</option>
                                            <option value="O+" {{ $employe->groupesanguin=='O+' ? 'selected' : '' }}>O+</option>
                                            <option value="O-" {{ $employe->groupesanguin=='O-' ? 'selected' : '' }}>O-</option>
                                           <option value="A+" {{ $employe->groupesanguin=='A+' ? 'selected' : '' }}>A+</option>
                                           <option value="A-" {{ $employe->groupesanguin=='A-' ? 'selected' : '' }}>A-</option>
                                           <option value="B+" {{ $employe->groupesanguin=='B+' ? 'selected' : '' }}>B+</option>
                                           <option value="B-" {{ $employe->groupesanguin=='B-' ? 'selected' : '' }}>B-</option>
                                           <option value="AB+" {{ $employe->groupesanguin=='AB+' ? 'selected' : '' }}>AB+</option>
                                           <option value="AB-" {{ $employe->groupesanguin=='AB-' ? 'selected' : '' }}>AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Matricule</label>
                                        <input type="text" class="form-control" name="matricule" value="{{ $employe->matricule }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Age de retraite</label>
                                        <input type="number" class="form-control" name="retraite" value="{{ $employe->retraite }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Service</label>
                                        <select class="form-control" name="service_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($services as $service)
                                           <option value="{{ $service->id }}" {{ $employe->service_id== $service->id ? 'selected' : ''}}>{{ $service->nom }}</option>
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
                                           <option value="{{ $famille->id }}" {{ $employe->famille_id== $famille->id ? 'selected' : ''}}>{{ $famille->nom }}</option>
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
                                           <option value="{{ $categorie->id }}" {{ $employe->categorie_id== $categorie->id ? 'selected' : ''}}>{{ $categorie->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Hierarchie</label>
                                        <select class="form-control" name="hierarchie_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($hierarchies as $hierarchie)
                                           <option value="{{ $hierarchie->id }}" {{ $employe->hierarchie_id== $hierarchie->id ? 'selected' : ''}}>{{ $hierarchie->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                               {{--   <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fonction</label>
                                        <select class="form-control" name="fonction_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($fonctions as $fonction)
                                           <option value="{{ $fonction->id }}" {{ $employe->fonction_id== $fonction->id ? 'selected' : ''}}>{{ $fonction->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">DATE DE NOMINATION A LA FONCTION</label>
                                        <input type="date" class="form-control" name="datenomination" value="{{ $employe->datenomination }}" placeholder="Date de prise fonction" required>
                                    </div>
                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employeur</label>
                                        <select class="form-control" name="employeur_id" required>
                                           <option value="">Veuillez choisir</option>
                                           @foreach ($employeurs as $employeur)
                                           <option value="{{ $employeur->id }}" {{ $employe->employeur_id== $employeur->id ? 'selected' : ''}}>{{ $employeur->nom }}</option>
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
                                           <option value="{{ $contrat->id }}" {{ $employe->contrat_id== $contrat->id ? 'selected' : ''}}>{{ $contrat->nom }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type Contrat</label>
                                        <select class="form-control" name="typecontrat" required>
                                            <option value="">Veuillez choisir</option>
                                            <option value="permanent" {{ $employe->typecontrat=='permanent' ? 'selected' :'' }}>permanent</option>
                                            <option value="prestataire" {{$employe->typecontrat=='prestataire' ? 'selected' :'' }}>prestataire</option>
                                         </select>
                                    </div>
                                </div>
                               {{--   <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Responsabilité</label>
                                        <input type="text" class="form-control" name="responsabilite" value="{{ $employe->responsabilite }}" placeholder="titre responsabilite">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date de nomination à la responsabilité</label>
                                        <input type="date" class="form-control" name="dateresponsabilite" value="{{ $employe->dateresponsabilite }}" placeholder="Date nommination responsabilite" >
                                    </div>
                                </div>  --}}
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
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<!-- form-picker-custom Js -->
<script src="{{ asset('assets/js/pages/form-validation.js')}}"></script>
@endsection
