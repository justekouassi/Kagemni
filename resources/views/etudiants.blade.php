@extends('base2')

@section('title', 'Etudiants')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>Etudiants</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Liste des étudiants</h4>
						@if (auth()->check() && auth()->user()->role == "Administrateur")
							<a class="ml-auto btn btn-primary" href="/etudiants/create">Ajouter</a>
						@endif
					</div>

					<div class="table-responsive">
						<table class="table mb-0">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Nom et prénoms</th>
									<th scope="col">Sexe</th>
									<th scope="col">Classe</th>
									<th scope="col">Email</th>
									<th scope="col">Téléphone</th>
									@if (auth()->check() && auth()->user()->role == "Administrateur")
										<th scope="col">Actions</th>
									@endif
								</tr>
							</thead>
							<tbody>
								<?php $etudiants = \App\Models\Etudiant::join('classes',
									'etudiants.id_classe', '=', 'classes.id') -> get([
										'etudiants.*',
										'classes.libelle_classe'
									]); ?>
								@foreach ($etudiants as $etudiant)
									<tr>
										<th scope="row">{{$etudiant->id}}</th>
										<td>{{$etudiant->nom_etudiant}} {{$etudiant->prenoms_etudiant}}</td>
										<td>{{$etudiant->sexe_etudiant}}</td>
										<td>{{$etudiant->libelle_classe}}</td>
										<td>{{$etudiant->email_etudiant}}</td>
										<td>{{$etudiant->tel_etudiant}}</td>
										@if (auth()->check() && auth()->user()->role == "Administrateur")
											<td>
												<a href="/etudiants/{{$etudiant->id}}/edit" class="btn btn-primary btn-sm">
													<i class="bi bi-pencil-square"></i>
												</a>
												<a href="/etudiants/{{$etudiant->id}}/delete" class="btn btn-danger btn-sm suppression">
													<i class="bi bi-trash"></i>
												</a>
											</td>
										@endif
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