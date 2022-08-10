@extends('base2')

@section('title', 'Thèmes')

@section('content')

	<div class="content-page">
		<div class="content">
			<div class="container-fluid">
				<div class="row page-title">
					<div class="col-md-12">
						<nav aria-label="breadcrumb" class="float-right mt-1">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a>Thèmes</a></li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="titre-ajout mb-2">
									<h4 class="header-title mt-0 mb-1">Liste des thèmes</h4>
									<a class="ml-auto btn btn-primary" href="/themes/create">Ajouter</a>
								</div>

								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col">N°</th>
												<th scope="col">Etudiant</th>
												<th scope="col">Titre</th>
												<th scope="col">Début</th>
												<th scope="col">Fin</th>
												<th scope="col">Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php $themes = \App\Models\Theme::join('etudiants',
											'themes.id_etudiant', '=', 'etudiants.id') -> get([
												'etudiants.*',
												'themes.libelle_theme',
											]); ?>
											@foreach ($themes as $theme)
												<tr>
													<th scope="row">{{$theme->id}}</th>
													<td>{{$theme->nom_etudiant}} {{$theme->prenoms_etudiant}}</td>
													<td>{{$theme->libelle_theme}}</td>
													<td></td>
													<td></td>
													<td>
														<a href="/themes/{{$theme->id}}/edit" class="btn btn-primary btn-sm">
															<i class="bi bi-pencil-square"></i>
														</a>
														<a href="/themes/{{$theme->id}}/delete" class="btn btn-danger btn-sm suppression">
															<i class="bi bi-trash"></i>
														</a>
													</td>
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