@extends('base2')

@section('title', 'Accueil')

@section('content')


<div class="container-fluid">
	<br>
	<div class="alert alert-success show"> Bienvenue sur Kagemni, votre superbe plateforme de gestion !
	</div>
	<div class="row align-items-center">
		<div class="col-sm-4 col-xl-6">
			<h4 class="mb-1 mt-0">Dashboard</h4>
			<br>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Enseignants
						</span>
						<h2 class="mb-0">{{ $enseignants->count() }}</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Etudiants
						</span>
						<h2 class="mb-0">{{ $etudiants->count() }}</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Thèmes étudiants
						</span>
						<h2 class="mb-0">{{ $themes->count() }}</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Projets enseignants
						</span>
						<h2 class="mb-0">{{ $projets->count() }}</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">
							L'enseignant qui a plus d'étudiants à encadrer
						</span>
						<h2 class="mb-0">{{ $super_encadreur[0]->nom_enseignant }} {{ $super_encadreur[0]->prenoms_enseignant }}</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">
							L'enseignant avec le plus grand nombre de projets
						</span>
						<h2 class="mb-0">{{ $super_chercheur[0]->nom_enseignant }} {{ $super_chercheur[0]->prenoms_enseignant }}</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-xl-6 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">
							Dernières modifications
						</span>
						<h2 class="mb-0"></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection