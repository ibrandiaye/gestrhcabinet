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
                            <h5 class="m-b-10">Formulaire de modification d'un fonction enfant</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('enfant.index') }}">Liste des fonctions enfants</a></li>

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
                        {!! Form::model($enfant, ['method'=>'PATCH','route'=>['enfant.update', $enfant->id],'enctype'=>'multipart/form-data']) !!}
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
                                        <label class="form-label">Prenom</label>
                                        <input type="text" class="form-control" value="{{ $enfant->prenom }}"  name="prenom"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nom</label>
                                        <input type="text" class="form-control" value="{{ $enfant->nom }}"  name="nom"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Naissance</label>
                                        <input type="date" class="form-control" value="{{ $enfant->datenaiss }}"  name="datenaiss"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Lieu Naissance</label>
                                        <input type="text" class="form-control" value="{{ $enfant->lieunaiss }}" name="lieunaiss"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Sexe</label>
                                        <select class="form-control" name="sexe" required>
                                            <option value="" >Selectionner</option>
                                            <option value="homme" {{ $enfant->sexe=="homme" ? 'selected' : '' }}>Homme</option>
                                           <option value="femme" { $enfant->sexe=="femme" ? 'selected' : '' }}>Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Scolarite</label>
                                        <select class="form-control" name="scolarite" required>
                                            <option value="" >Selectionner</option>
                                            <option value="oui" {{  $enfant->scolarite=="oui" ? 'selected' : ''  }}>Oui</option>
                                           <option value="non" {{  $enfant->scolarite=="non" ? 'selected' : ''  }}>Non</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="employe_id" value="{{ $enfant->employe_id }}">
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
