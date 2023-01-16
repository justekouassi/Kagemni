@extends('base2')

@section('title', 'Accueil')

@section('content')


<div class="container-fluid">
	<br>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Bienvenue sur Kagemni, votre superbe plateforme de gestion
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<div class="mb-4 mt-0">
		<h4>Dashboard</h4>
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
	</div>

	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="chart-area">
					<canvas id="myAreaChart"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('javascript')

<script src="{{ asset('js/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

@endsection