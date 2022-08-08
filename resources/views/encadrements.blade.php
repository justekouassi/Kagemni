@extends('base2')

@section("title", "Liste des encadrements")

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row page-title">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>etudiants</a></li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="titre-ajout mb-2">
								<h4 class="header-title mt-0 mb-1">Encadrements</h4>
								<a class="ml-auto btn btn-primary" href="/etudiants-create">Ajouter</a>
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Enseignants</th>
											<th scope="col">Etudiants</th>
											<th scope="col">Classe</th>
											<th scope="col">Thème</th>
											{{-- <th scope="col">Action</th> --}}
										</tr>
									</thead>
									<tbody>

										<?php $encadrements = \App\Models\Enseignant::join('etudiants',
											'enseignants.id_etudiant', '=', 'etudiants.id') -> join('classes', 'etudiants.id_classe', '=', 'classes.id') -> join('themes', 'etudiants.id_theme', '=', 'themes.id') -> get([
												'enseignants.*',
												'etudiants.nom_etudiant',
												'etudiants.prenoms_etudiant',
												'classes.libelle_classe',
												'themes.libelle_theme',
											]);
										?>
										@foreach ($encadrements as $encadrement)
											<tr>
												<th scope="row">{{$encadrement->id}}</th>
												<td>{{$encadrement->nom_enseignant}} {{$encadrement->prenoms_enseignant}}</td>
												<td>{{$encadrement->nom_etudiant}} {{$encadrement->prenoms_etudiant}}</td>
												<td>{{$encadrement->libelle_classe}}</td>
												<td>{{$encadrement->libelle_theme}}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
	@endsection