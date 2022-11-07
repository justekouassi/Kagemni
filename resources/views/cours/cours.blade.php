@extends('base2')

@section('title', 'Cours')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>Cours</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Liste des cours</h4>
						@if (auth()->check() && auth()->user()->role == "Administrateur")
							<a class="ml-auto btn btn-primary" href="/cours/create">Ajouter</a>
						@endif
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Matière</th>
									<th scope="col">Enseignant</th>
									<th scope="col">Classe</th>
									<th scope="col">Date</th>
									<th scope="col">Début</th>
									<th scope="col">Fin</th>
									@if (auth()->check() && auth()->user()->role == "Administrateur")
										<th scope="col">Action</th>
									@endif
								</tr>
							</thead>
							<tbody>
								<?php 
								$cours = \App\Models\Cours::join('enseignants', 'cours.id_enseignant', '=', 'enseignants.id') 
									-> join('classes', 'cours.id_classe', '=', 'classes.id') 
									-> get([
										'cours.*',
										'enseignants.nom_enseignant',
										'enseignants.prenoms_enseignant',
										'classes.libelle_classe',
									]) -> sortBy->date_cours;
								?>
								@foreach ($cours as $cour)
									<tr>
										<th scope="row">{{$cour->id}}</th>
										<td>{{$cour->matiere}}</td>
										<td>{{$cour->nom_enseignant}} {{$cour->prenoms_enseignant}}</td>
										<td>{{$cour->libelle_classe}}</td>
										<td>{{$cour->date_cours}}</td>
										<td>{{$cour->heure_debut}}</td>
										<td>{{$cour->heure_fin}}</td>
										@if (auth()->check() && auth()->user()->role == "Administrateur")
											<td>
												<a href="/cours/{{$cour->id}}/edit" class="btn btn-primary btn-sm">
													<i class="bi bi-pencil-square"></i>
												</a>
												<a href="/cours/{{$cour->id}}/delete" class="btn btn-danger btn-sm suppression">
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