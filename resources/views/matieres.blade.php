@extends('base2')

@section('title', 'Matières')

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
								<h4 class="header-title mt-0 mb-1">Liste des matières</h4>
								<a class="ml-auto btn btn-primary"
									href="matieres/create">Ajouter</a>
							</div>

							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nom</th>
											<th scope="col">Description</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Droit du travail</td>
											<td></td>
											<td>
												<a href="matieres/1/edit" class="btn btn-primary btn-sm">
													<i class="bi bi-pencil-square"></i>
												</a>
												<a href="matieres/1/delete" class="btn btn-danger btn-sm confirmation">
													<i class="bi bi-trash"></i>
												</a>
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
</div>

@endsection