@extends('base2')

@section("title", "Ajout d'une nouvelle classe")

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row page-title">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
							<li class="breadcrumb-item"><a href="/classes">Classes</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>Ajouter</a></li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="d-flex mb-2">
								<h4 class="header-title mt-0 mb-1">Ajouter une classe</h4>
							</div>
							<form method="post" action="/classes/create">
								{{ csrf_field() }}
								
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="ecole">Ecole</label>
											<div class="col-lg-10" style="margin-bottom: 11px">
												<select required name="ecole" class="form-select" id="ecole">
													<option value="" selected disabled>* Choisir une école *</option>
													<option value="CPGE">CPGE</option>
													<option value="ESA">ESA</option>
													<option value="ESCAE">ESCAE</option>
													<option value="ESI">ESI</option>
													<option value="ESTP">ESTP</option>
													<option value="ESMG">ESMG</option>
													<option value="ESPE">ESPE</option>
													<option value="IDSI">IDSI</option>
													<option value="VALOPRO">VALOPRO</option>
												</select>
											</div>
											<label class="col-lg-2 col-form-label" for="filiere">Filière</label>
											<div class="col-lg-10">
												<input required type="text" class="form-control" id="filiere" name="filiere">
											</div>
											<label class="col-lg-2 col-form-label" for="classe">Classe</label>
											<div class="col-lg-10">
												<input required type="text" class="form-control" id="classe" name="classe">
											</div>
											<label class="col-lg-2 col-form-label" for="annee">Année scolaire</label>
											<div class="col-lg-10">
												<input required type="text" class="form-control" id="annee" name="annee">
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Enregistrer</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection