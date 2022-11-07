@extends('base2')

@section("title", "Mise à jour d'un thème")

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Accueil</a></li>
					<li class="breadcrumb-item"><a href="/themes">Thèmes</a></li>
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
						<h4 class="header-title mt-0 mb-1">Ajouter un thème</h4>
					</div>

					<form method="post" action="/themes/{{$theme->id}}/edit">
						@csrf
						
						<div class="row">
							<div class="col">
								<div class="form-group row">
									<label class="col-lg-2 col-form-label" for="theme">Thème</label>
									<div class="col-lg-10">
										<input required type="text" class="form-control" id="theme" name="theme" value="{{$theme->libelle_theme}}">
									</div>

									<label class="col-lg-2 col-form-label" for="etudiant">Etudiant</label>
									<div class="col-lg-10" style="margin-bottom: 11px">
										<select required name="etudiant" class="form-select" id="etudiant">
											@php $etudiants = \App\Models\Etudiant::all() @endphp
											<option value="{{$theme->id_etudiant}}">{{$theme->id_etudiant}}</option>
											@foreach ($etudiants as $etudiant)
												<option value="{{$etudiant->id}}">{{$etudiant->nom_etudiant}} {{$etudiant->prenoms_etudiant}}
												</option>
											@endforeach
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Modifier</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection