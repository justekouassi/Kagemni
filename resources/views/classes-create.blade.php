@extends('base2')

@section("title", "Ajout d'une nouvelle classe")

@section('content')

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
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
								@csrf
								
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="ecole">Ecole</label>
											<div class="col-lg-10" style="margin-bottom: 11px">
												<select name="ecole" class="form-select dynamic" id="ecole" data-dependent="filiere" required>
													<option value="" selected disabled>Choisir Ecole</option>
													@foreach($ecoles_list as $ecole)
														<option value="{{ $ecole->ecole}}">{{ $ecole->ecole }}</option>
													@endforeach
												</select>
											</div>
											<label class="col-lg-2 col-form-label" for="filiere">Filière</label>
											<div class="col-lg-10" style="margin-bottom: 11px">
												<select name="filiere" id="filiere" class="form-select dynamic" data-dependent="libelle_classe">
													<option value="" selected disabled>Choisir Filiere</option>
												</select>
											</div>
											<label class="col-lg-2 col-form-label" for="libelle_classe">Classe</label>
											<div class="col-lg-10" style="margin-bottom: 11px">
												<select name="classe" id="libelle_classe" class="form-select">
													<option value="" selected disabled>Choisir Classe</option>
												</select>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
	$(document).ready(function () {

		$('.dynamic').change(function () {
			if ($(this).val() != '') {
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent');
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url: "{{ route('classes-create.fetch') }}",
					method: "POST",
					data: { select: select, value: value, _token: _token, dependent: dependent },
					success: function (result) {
						$('#' + dependent).html(result);
					}

				})
			}
		});

		$('#ecole').change(function () {
			$('#filiere').val('');
			$('#classe').val('');
		});

		$('#filiere').change(function () {
			$('#classe').val('');
		});

	});
</script>