@extends('base2')

@section("title", "Liste des encadrements d'un enseignant")

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row page-title">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>etudiants</a></li>
						</ol>
					</nav>
					<h4 class="mb-1 mt-0">etudiants</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="d-flex mb-2">
								<h4 class="header-title mt-0 mb-1">Liste des etudiants</h4>
								<a class="ml-auto btn btn-primary" href="/etudiants-create">Ajouter</a>
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nom</th>
											<th scope="col">Prenoms</th>
											<th scope="col">Date de naissance</th>
											<th scope="col">Numéro de téléphone</th>
											<th scope="col">Email</th>
											<th scope="col">Classe</th>
											<th scope="col">Thème</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">2</th>
											<td>Malambian</td>
											<td>Malambra Emmanuelle</td>
											<td>2009-07-20</td>
											<td>+225485522214</td>
											<td>ING INFO 2</td>
											<td>konanyao@gmail.com</td>
											<td>Conception et realisation d&#039;un capteur de présence</td>
											<td>
												<form action="http://inphb-mat-info.herokuapp.com/etudiants/2" method="POST">
													<a href="http://inphb-mat-info.herokuapp.com/etudiants/2/edit" class="btn btn-primary btn-sm">
														<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
															fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" class="feather feather-edit">
															<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
															</path>
															<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
															</path>
														</svg>
													</a>
													<input type="hidden" name="_token" value="J3eKXKzbV4U3TC6QXwDIywR2BQcW0ufo4cUalrkc"> <input
														type="hidden" name="_method" value="DELETE"> <button type="submit"
														class="btn btn-danger btn-sm">
														<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
															fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" class="feather feather-trash">
															<polyline points="3 6 5 6 21 6"></polyline>
															<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
															</path>
														</svg>
													</button>
												</form>
											</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Koffi</td>
											<td>Guy</td>
											<td>2004-02-20</td>
											<td>+225487798952</td>
											<td>ING EIT 2</td>
											<td>manuemalambra01@gmail.com</td>
											<td>Conception et realisation d&#039;un capteur de présence</td>
											<td>
												<form action="http://inphb-mat-info.herokuapp.com/etudiants/3" method="POST">
													<a href="http://inphb-mat-info.herokuapp.com/etudiants/3/edit" class="btn btn-primary btn-sm">
														<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
															fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" class="feather feather-edit">
															<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
															</path>
															<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
															</path>
														</svg>
													</a>
													<input type="hidden" name="_token" value="J3eKXKzbV4U3TC6QXwDIywR2BQcW0ufo4cUalrkc"> <input
														type="hidden" name="_method" value="DELETE"> <button type="submit"
														class="btn btn-danger btn-sm">
														<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
															fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" class="feather feather-trash">
															<polyline points="3 6 5 6 21 6"></polyline>
															<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
															</path>
														</svg>
													</button>
												</form>
											</td>
										</tr>
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