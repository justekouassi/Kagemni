@extends('base2')

@section('title', 'Enseignants')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>Enseignants</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Liste des enseignants </h4>
						@if (auth()->check() && auth()->user()->role == "Administrateur")
							<a class="ml-auto btn btn-primary" href="/enseignants/create">Ajouter</a>
						@endif
					</div>

					<div class="table-responsive">
						<table class="table mb-0 display">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Noms et prénoms</th>
									<th scope="col">Sexes</th>
									<th scope="col">Emails</th>
									<th scope="col">Téléphones</th>
									@if (auth()->check() && auth()->user()->role == "Administrateur")
										<th scope="col">Actions</th>
									@endif
								</tr>
							</thead>
							<tbody>

								<?php $enseignants = \App\Models\Enseignant::all(); ?>
								@foreach ($enseignants as $enseignant)
									<tr>
										<th scope="row">{{$enseignant->id}}</th>
										<td>{{$enseignant->nom_enseignant}} {{$enseignant->prenoms_enseignant}}</td>
										<td>{{$enseignant->sexe_enseignant}}</td>
										<td>{{$enseignant->email_enseignant}}</td>
										<td>{{$enseignant->tel_enseignant}}</td>
										@if (auth()->check() && auth()->user()->role == "Administrateur")
											<td>
												<a href="/enseignants/{{$enseignant->id}}/edit"
													class="btn btn-primary btn-sm">
													<i class="bi bi-pencil-square"></i>
												</a>
												<a href="/enseignants/{{$enseignant->id}}/delete" class="btn btn-danger btn-sm suppression">
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