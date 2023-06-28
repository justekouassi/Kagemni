@extends('base2')

@section('title', "Mise à jour d'un étudiant")

@section('content')


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="float-right mt-1" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Accueil</a></li>
						<li class="breadcrumb-item"><a href="/etudiants">Etudiants</a></li>
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
							<h4 class="header-title mt-0 mb-1">Ajouter un etudiant</h4>
						</div>

						<form method="post" action="/etudiants/{{ $etudiant->id }}/edit">
							@csrf

							<div class="row">
								<div class="col">
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="nom">Nom</label>
										<div class="col-lg-10">
											<input class="form-control" id="nom" name="nom" type="text" value="{{ $etudiant->nom_etudiant }}"
												required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="prenom">Prénoms</label>
										<div class="col-lg-10">
											<input class="form-control" id="prenom" name="prenom" type="text"
												value="{{ $etudiant->prenoms_etudiant }}" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="sexe">Sexe</label>
										<div class="col-lg-10">
											<input class="form-control" id="sexe" name="sexe" type="text"
												value="{{ $etudiant->sexe_etudiant }}" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="tel">Téléphone</label>
										<div class="col-lg-10">
											<input class="form-control" id="tel" name="tel" type="tel" value="{{ $etudiant->tel_etudiant }}"
												required placeholder="0748502093" pattern="[0-9]{10}">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="email">Email</label>
										<div class="col-lg-10">
											<input class="form-control" id="email" name="email" type="email"
												value="{{ $etudiant->email_etudiant }}" required>
										</div>
									</div>
									<button class="btn btn-primary" type="submit">Modifier</button>
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
