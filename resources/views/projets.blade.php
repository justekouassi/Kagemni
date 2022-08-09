@extends('base2')

@section('title', 'Projets')

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<br>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="titre-ajout mb-2">
								<h4 class="header-title mt-0 mb-1">Liste des projets</h4>
								<a class="ml-auto btn btn-primary" href="/projets/create">Ajouter</a>
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">N°</th>
											<th scope="col">Titre</th>
											<th scope="col">Début</th>
											<th scope="col">Fin</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php $projets = \App\Models\Projet::all(); ?>
										@foreach ($projets as $projet)
											<tr>
												<th scope="row">{{$projet->id}}</th>
												<td>{{$projet->libelle_projet}}</td>
												<td>{{$projet->debut_projet}}</td>
												<td>{{$projet->fin_projet}}</td>
												<td>
													<a href="/projets/{{$projet->id}}/edit" class="btn btn-primary btn-sm confirmation">
														<i class="bi bi-pencil-square"></i>
													</a>
													<a href="/projets/{{$projet->id}}/delete" class="btn btn-danger btn-sm">
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