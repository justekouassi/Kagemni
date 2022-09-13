@extends('base2')

@section('title', 'Projets')

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>Projets</a></li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="titre-ajout mb-2">
								<h4 class="header-title mt-0 mb-1">Liste des projets</h4>
								@if (auth()->user()->role != "Visiteur")
									<a class="ml-auto btn btn-primary" href="/projets/create">Ajouter</a>
								@endif
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">N°</th>
											<th scope="col">Enseignant</th>
											<th scope="col">Titre</th>
											<th scope="col">Début</th>
											<th scope="col">Fin</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php $projets = \App\Models\Projet::join('enseignants',
										'projets.id_enseignant', '=', 'enseignants.id') -> get([
											'enseignants.nom_enseignant',
											'enseignants.prenoms_enseignant',
											'projets.*',
										]); ?>
										@foreach ($projets as $projet)
											<tr>
												<th scope="row">{{$projet->id}}</th>
												<td>{{$projet->nom_enseignant}} {{$projet->prenoms_enseignant}}</td>
												<td>{{$projet->libelle_projet}}</td>
												<td>{{$projet->debut_projet}}</td>
												<td>{{$projet->fin_projet}}</td>
												@if (auth()->user()->role == "Administrateur")
													<td>
														<a href="/projets/{{$projet->id}}/edit" class="btn btn-primary btn-sm">
															<i class="bi bi-pencil-square"></i>
														</a>
														<a href="/projets/{{$projet->id}}/delete" class="btn btn-danger btn-sm suppression">
															<i class="bi bi-trash"></i>
														</a>
													</td>
												@else
													<td></td>
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
	</div>
</div>

@endsection