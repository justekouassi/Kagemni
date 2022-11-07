@extends('base2')

@section("title", "Ajout d'un nouveau cours")

@section('content')


		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Accueil</a></li>
							<li class="breadcrumb-item"><a href="/cours">Cours</a></li>
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
								<h4 class="header-title mt-0 mb-1">Ajouter un cours</h4>
							</div>

							<form method="post" action="/cours/{{$cours->id}}/create">
								@csrf
								
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="matiere">Matière</label>
											<div class="col-lg-10">
												<input required type="text" class="form-control" id="matiere" name="matiere" value="{{$cours->matiere}}">
											</div>
											<label class="col-lg-2 col-form-label" for="date">Date du cours</label>
											<div class="col-lg-10">
												<input required type="date" class="form-control" id="date" name="date" value="{{$cours->date_cours}}">
											</div>
											<label class="col-lg-2 col-form-label" for="debut">Heure de début</label>
											<div class="col-lg-10">
												<input required type="time" class="form-control" id="debut" name="debut" value="{{$cours->heure_debut}}">
											</div>
											<label class="col-lg-2 col-form-label" for="fin">Heure de fin</label>
											<div class="col-lg-10">
												<input required type="time" class="form-control" id="fin" name="fin" value="{{$cours->heure_fin}}">
											</div>

											<label class="col-lg-2 col-form-label" for="classe">Classe</label>
											<div class="col-lg-10" style="margin-bottom: 11px">
												<select required name="classe" class="form-select" id="classe">
													<?php $classes = \App\Models\Classe::all() ?>
													<option value="{{$cours->id_classe}}">{{$cours->id_classe}}</option>
													@foreach ($classes as $classe)
														<option value="{{$classe->id}}">{{$classe->libelle_classe}}</option>
													@endforeach
												</select>
											</div>

											<label class="col-lg-2 col-form-label" for="enseignant">Enseignant</label>
											<div class="col-lg-10" style="margin-bottom: 11px">
												<select required name="enseignant" class="form-select" id="enseignant">
													@php $enseignants = \App\Models\Enseignant::all() @endphp
													<option value="{{$cours->id_enseignant}}">{{$cours->id_enseignant}}</option>
													@foreach ($enseignants as $enseignant)
														<option value="{{$enseignant->id}}">{{$enseignant->nom_enseignant}} {{$enseignant->prenoms_enseignant}}
														</option>
													@endforeach
												</select>
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
</div>

@endsection