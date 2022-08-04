@extends('base2')

@section('title', 'Etudiants')

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
								<h4 class="header-title mt-0 mb-1">Liste des étudiants</h4>
								<a class="ml-auto btn btn-primary" href="/etudiants/create">Ajouter</a>
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">N°</th>
											<th scope="col">Nom</th>
											<th scope="col">Prenoms</th>
											<th scope="col">Email</th>
											<th scope="col">Numéro de téléphone</th>
											<th scope="col">Classe</th>
											<th scope="col">Thème</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>

										<?php $etudiants = \App\Models\Etudiant::all(); ?>
										@foreach ($etudiants as $etudiant)
											<tr>
												<th scope="row">{{$etudiant->id}}</th>
												<td>{{$etudiant->nom_etudiant}}</td>
												<td>{{$etudiant->prenoms_etudiant}}</td>
												<td>{{$etudiant->email_etudiant}}</td>
												<td>{{$etudiant->tel_etudiant}}</td>
												<td></td>
												<td></td>
												<td>
													<form action="/etudiants/{{$etudiant->id}}" method="POST">
														{{ csrf_field() }}

														<a href="/etudiants/{{$etudiant->id}}/edit"
															class="btn btn-primary btn-sm">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
																fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
																stroke-linejoin="round" class="feather feather-edit">
																<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg>
														</a>
														<a href="/etudiants/{{$etudiant->id}}/delete"
															class="btn btn-danger btn-sm">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
																fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
																stroke-linejoin="round" class="feather feather-trash">
																<polyline points="3 6 5 6 21 6"></polyline>
																<path
																	d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
																</path>
															</svg>
														</a>
													</form>
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