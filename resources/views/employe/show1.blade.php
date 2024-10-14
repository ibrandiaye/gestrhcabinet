@extends('layout')
@section("content")
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
								<a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
								<a class="dropdown-item" href="#"><i class="feather icon-film mr-2"></i> upload video</a>
								<a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-100" src="{{ asset('img/1633249.svg') }}" alt="User image">
											</div>

										</div>
										<div class="certificated-badge">
											<i class="fas fa-certificate text-c-blue bg-icon"></i>
											<i class="fas fa-check front-icon text-white"></i>
										</div>
									</a>
								</div>
							</div>
							<h5 class="mb-1"> {{ $employe->prenom }} {{ $employe->nom }}</h5>
							<p class="mb-2 text-muted"> {{ $employe->matricule }} </p>
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="mailto:demo@domain.com" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i>{{ $employe->email }}</a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i>{{ $employe->tel }}</a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
										<div class="media-body">
											<p class="mb-0 text-muted">{{ $employe->adresse }}</p>

										</div>
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-reset active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="feather icon-user mr-2"></i>Informations Personnel</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="feather icon-home  mr-2"></i>Information sur le Poste</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="feather icon-move mr-2"></i>Mobilité</a>
								</li>
								 <li class="nav-item">
									<a class="nav-link text-reset" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false"><i class="feather icon-move mr-2"></i>Imputation</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-8 order-md-2">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0"></h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-6  ">CNI</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->cni }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Prenom Nom</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->prenom }} {{ $employe->nom }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Date et Lieu  Naissance</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{  Carbon\Carbon::parse($employe->datenaiss)->format('d-m-Y') }}   à {{ $employe->lieunaiss }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">Age</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->age }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">TRANCHE AGE</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->trancheage      }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Sexe</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->sexe }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Situation Matrimoniale</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->sm }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Groupe Sanguin</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->groupesanguin }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Email</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->email }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Téléphone</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->tel }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Nombre D'enfant(s)</div>
                                    <div class="col-sm-6">
                                    @if($nbEnfant > 0)
                                  <strong>  {{ $nbEnfant }} enfant(s)</strong> <a href="{{ route('enfant.employe', $employe->id) }}" role="button" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">EMPLOYEUR</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->employeur->nom }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">NATURE CONTRAT</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->typecontrat }}
                                    </div>
                                </div>
                              @if( $employe->contrat)

                              <div class="form-group row">
                                    <laubel class="col-sm-6  ">TYPE CONTRAT</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->contrat->nom }}
                                    </div>
                                </div>  @endif
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">DATE DE PRISE DE SERVICE</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ Carbon\Carbon::parse($employe->datefonction)->format('d-m-Y')   }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">Ancienneté</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->anciennete }} ans
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">TRANCHE Ancienneté</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->trancheanciennete }} ans
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">nombre d’années d’activité</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->retraite }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <laubel class="col-sm-6  ">Date Retraite</laubel>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{Carbon\Carbon::parse( $employe->dateretraite)->format('d-m-Y') }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Religion</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->religion }}
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#exampleModalLongEnfant">Ajouter Enfant</button>
                             <button type="button" class="btn  btn-info" data-toggle="modal" data-target="#exampleModalLongDocEnfant">Document Enfant</button>
                        </div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Information sur le Poste occupé </h5>
                                <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
                                    <i class="feather icon-edit"></i>
                                </button>
                            </div>
                            <div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
                                <div class="form-group row">
                                    <div class="col-sm-6  ">Service</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->service->nom }}
                                    </div>
                                </div>
                                @if( $employe->famille)
                                <div class="form-group row">
                                    <div class="col-sm-6  ">FAMILLE PROFESSIONNELLE</div>
                                    <div class="col-sm-6 font-weight-bolder">
                                        {{ $employe->famille->nom }}
                                    </div>
                                </div>
                                @endif

                                    <div class="form-group row">
                                        <div class="col-sm-6  ">Catégorie socio-professionnelle</div>
                                        <div class="col-sm-6">
                                            {{ $employe->categorie->nom  }}
                                        </div>
                                    </div>
                                    @if($employe->hierarchie)
                                    <div class="form-group row">
                                        <div class="col-sm-6  ">Hiérarchie</div>
                                        <div class="col-sm-6">
                                            {{ $employe->hierarchie->nom  }}
                                        </div>
                                    </div>
                                    @endif

                                    @if(!empty($occupe->fonction))
                                    <div class="form-group row">
                                        <div class="col-sm-6  ">Fonction</div>
                                        <div class="col-sm-6">
                                           {{ $occupe->fonction->nom }}    {{-- <a href="{{ route('poste.employe', $employe->id) }}" role="button" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>  --}}
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-6  ">DATE DE NOMINATION à la fonction</div>
                                        <div class="col-sm-6">
                                            {{ Carbon\Carbon::parse($occupe->updated_at)->format('d-m-Y')   }}
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group row">
                                        <div class="col-sm-6  ">Responsabilite</div>
                                        <div class="col-sm-6">
                                        @if($responsabilite)
                                        {{ $responsabilite->nom }} <a href="{{ route('responsabilite.employe', $employe->id) }}" role="button" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                        @endif
                                        </div>
                                    </div>

                            </div>
                            <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                            </div>
                            <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongRes">Ajouter Responsabilite</button>
                            <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#exampleModalLongEmp">Ajouter Fonction</button>
                           {{--   <a  href="{{ route('create.conge.employe', ['id'=>$employe->id]) }}" class="btn  btn-danger">Ajouté Congé</a>
                            <a  href="{{ route('conge.employe', ['id'=>$employe->id]) }}" class="btn  btn-info">Voir congé</a>
                            <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongEmputation">Ajouter Imputation</button>
                            <a  href="{{ route('imputation.employe', ['id'=>$employe->id]) }}" class="btn  btn-primary">Voir Imputation</a>
        --}}                  </div>

					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row">



                         <a  href="{{ route('create.conge.employe', ['id'=>$employe->id]) }}" class="btn  btn-danger">Ajouté Congé</a>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="{{ route('conge.employe', ['id'=>$employe->id]) }}" class="btn  btn-info">Voir congé</a>


						</div>
					</div>
					<div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                        <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#exampleModalLongEmputation">Ajouter Imputation</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="{{ route('imputation.employe', ['id'=>$employe->id]) }}" class="btn  btn-primary">Voir Imputation</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 order-md-1">
				<div class="card new-cust-card">
					<div class="card-header">
						<h5>Documents</h5>
						<div class="card-header-right">
							<div class="btn-group card-option">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="feather icon-more-horizontal"></i>
								</button>
								<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
									<li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
									<li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
									<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
									<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="cust-scroll" style="height:415px;position:relative;">
						<div class="card-body p-b-0">
                            @if(sizeof($employe->documents) > 0)


                                    @foreach($employe->documents as $document)
                                    <div class="form-group row">
                                        <div class="col-sm-6  "> <a href="{{ asset('clceorccis/'.$document->fichier) }}">{{ $document->nom }}</a></div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <div class="form-group">
                                        <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLongDoc">Ajouter Document</button>
                            <div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">

                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile body end -->
	</div>
</div>
<div id="exampleModalLongDoc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('document.save.employe') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
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
                    <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Nom document</label>
                <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Nom document" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Document</div>
                <input type="file" class="form-control"  name="docs"  required>
            </div>
        </div>
                    <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                    <input type="hidden" value="empl" name="page">

            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn  btn-primary">Enregistrer</button>
            </div>


        </div>
        </form>
    </div>

</div>

<div id="exampleModalLongRes" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Responsabilite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('responsabilite.store') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

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
                        <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Nom </label>
                    <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Nom document" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Date Debut</label>
                    <input type="date" class="form-control"  name="debut"  required>
                </div>
            </div>
                        <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                    </div>

            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn  btn-primary">Enregistrer</button>
            </div>
            </form>
        </div>
    </div>
</div>
    <div id="exampleModalLongEmp" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ajouter =fonction occupé</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('occupe.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Fonction</label>
                                    <select class="form-control" name="fonction_id" required>
                                       <option value="">Veuillez choisir</option>
                                       @foreach ($fonctions as $fonction)
                                       <option value="{{ $fonction->id }}"   >{{ $fonction->nom }}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Date Debut</label>
                                    <input type="date" class="form-control"  name="debut"  required>
                                </div>
                            </div>

                            <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                        </div>

                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn  btn-primary">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
        </div>

        <div id="exampleModalLongEmputation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Imputation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('imputation.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

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

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <input type="text" class="form-control"  name="type"  required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Taux</label>
                                        <input type="text" class="form-control"  name="taux"  required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">destination</label>
                                        <input type="text" class="form-control"  name="destination"  required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">beneficiaire</label>
                                        <input type="text" class="form-control"  name="beneficiaire"  required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Document</div>
                                        <input type="file" class="form-control"  name="docs"  required>
                                    </div>
                                <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                            </div>

                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn  btn-primary">Enregistrer</button>
                    </div>
                    </form>
                </div>
            </div>
            </div>

            <div id="exampleModalLongEnfant" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Enfant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{ route('enfant.store') }}" method="POST" >
                        <div class="modal-body">

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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Prenom</label>
                                            <input type="text" class="form-control"  name="prenom"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Nom</label>
                                            <input type="text" class="form-control"  name="nom"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Date Naissance</label>
                                            <input type="date" class="form-control"  name="datenaiss"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Lieu Naissance</label>
                                            <input type="text" class="form-control"  name="lieunaiss"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
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
                                            <label class="form-label">Scolarite</label>
                                            <select class="form-control" name="scolarite" required>
                                                <option value="" >Selectionner</option>
                                                <option value="oui">Oui</option>
                                               <option value="non">Non</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ $employe->id }}" name="employe_id">
                                </div>

                        <div class="modal-footer">
                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn  btn-primary">Enregistrer</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>

                <div id="exampleModalLongDocEnfant" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Document Endat Enfant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{ route('docenfant.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">

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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Enfant</label>
                                                <select class="form-control" name="enfant_id" required>
                                                    <option value="" >Selectionner</option>
                                                    @foreach ($enfants as $enfant )
                                                    <option value="{{ $enfant->id }}">{{ $enfant->prenom }} {{ $enfant->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Nom Document</label>
                                                <input type="text" class="form-control"  name="nom"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Document</div>
                                                <input type="file" class="form-control"  name="docs"  required>
                                            </div>
                                    </div>

                            <div class="modal-footer">
                                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn  btn-primary">Enregistrer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
@endsection
