@extends('base2')

@section('title', 'Accueil')

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row page-title align-items-center">
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

			<!-- content -->
			<div class="row">
				<div class="col-md-6 col-xl-3">
					<div class="card">
						<div class="card-body p-0">
							<div class="media p-3">
								<div class="media-body">
									<span class="text-muted text-uppercase font-size-12 font-weight-bold">Enseignants
									</span>
									<h2 class="mb-0">{{ $enseignants->count() }}</h2>
								</div>
								<div class="align-self-center">
									<div id="today-revenue-chart" class="apex-charts"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="card">
						<div class="card-body p-0">
							<div class="media p-3">
								<div class="media-body">
									<span class="text-muted text-uppercase font-size-12 font-weight-bold">Etudiants
									</span>
									<h2 class="mb-0">{{ $etudiants->count() }}</h2>
								</div>
								<div class="align-self-center">
									<div id="today-revenue-chart" class="apex-charts"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="card">
						<div class="card-body p-0">
							<div class="media p-3">
								<div class="media-body">
									<span class="text-muted text-uppercase font-size-12 font-weight-bold">Thèmes étudiants
									</span>
									<h2 class="mb-0">{{ $themes->count() }}</h2>
								</div>
								<div class="align-self-center">
									<div id="today-revenue-chart" class="apex-charts"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="card">
						<div class="card-body p-0">
							<div class="media p-3">
								<div class="media-body">
									<span class="text-muted text-uppercase font-size-12 font-weight-bold">Projets enseignants
									</span>
									<h2 class="mb-0">{{ $projets->count() }}</h2>
								</div>
								<div class="align-self-center">
									<div id="today-revenue-chart" class="apex-charts"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="alert alert-success alert-dismissible fade show" role="alert"> Bienvenue sur Kagemni, votre superbe plateforme de gestion !
			</div>
		</div>
	</div>
</div>

@endsection