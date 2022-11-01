@extends('base2')

@section("title", "Liste des encadrements")

@section('content')

<div class="container-fluid">
	<div class="row">
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
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Encadrements</h4>
						@if (auth()->check() && auth()->user()->role == "Administrateur")
							<a class="ml-auto btn btn-primary" href="/etudiants-create">Ajouter</a>
						@endif
					</div>

					<div class="table-responsive">
						<table class="table mb-0">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Enseignants</th>
									<th scope="col">Etudiants</th>
									<th scope="col">Classes</th>
									<th scope="col">Thèmes</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$encadrements = \App\Models\Theme::join('etudiants', 'themes.id_etudiant', '=', 'etudiants.id') 
									-> join('enseignants', 'etudiants.id_enseignant', '=', 'enseignants.id') 
									-> join('classes', 'etudiants.id_classe', '=', 'classes.id') 
									-> get([
										'enseignants.nom_enseignant',
										'enseignants.prenoms_enseignant',
										'etudiants.nom_etudiant',
										'etudiants.prenoms_etudiant',
										'classes.libelle_classe',
										'themes.id',
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

@endsection