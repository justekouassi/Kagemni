@extends('base2')

@section('title', 'Classes')

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row page-title">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>Classes</a></li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="mb-2 titre-ajout">
								<h4 class="header-title mt-0 mb-1">Liste des classes </h4>
								<a class="ml-auto btn btn-primary" href="/classes/create">Ajouter</a>
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">N°</th>
											<th scope="col">Nom</th>
											<th scope="col">Filière</th>
											<th scope="col">Ecole</th>
											<th scope="col">Année scolaire</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php $classes = \App\Models\Classe::all(); ?>
										@foreach ($classes as $classe)
											<tr>
												<th scope="row">{{$classe->id}}</th>
												<td>{{$classe->libelle_classe}}</td>
												<td>{{$classe->filiere}}</td>
												<td>{{$classe->ecole}}</td>
												<td>{{$classe->annee_scolaire}}</td>
												<td>
													<a href="/classes/{{$classe->id}}/edit" class="btn btn-primary btn-sm">
														<i class="bi bi-pencil-square"></i>
													</a>
													<a href="/classes/{{$classe->id}}/delete" class="btn btn-danger btn-sm suppression">
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