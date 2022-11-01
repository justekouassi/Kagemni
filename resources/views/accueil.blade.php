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

			<?php 
				$enseignants = \App\Models\Enseignant::all();
				$etudiants = \App\Models\Etudiant::all();
				$themes = \App\Models\Theme::all();
				$projets = \App\Models\Projet::all();
			?>

			<div class="row">
				<div class="col-md-6 col-xl-3">
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
				<div class="col-md-6 col-xl-3">
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
				<div class="col-md-6 col-xl-3">
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
				<div class="col-md-6 col-xl-3">
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
			</div>
		</div>
	</div>
</div>

@endsection