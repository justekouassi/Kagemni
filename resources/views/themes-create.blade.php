@extends('base2')

@section('title', 'Thèmes')

@section('content')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
	<div class="content">
		<div class="container-fluid">
			<div class="row page-title">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Accueil</a></li>
							<li class="breadcrumb-item"><a href="#">themes</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>Ajouter</a></li>
						</ol>
					</nav>
					<h4 class="mb-1 mt-0">themes</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="d-flex mb-2">
								<h4 class="header-title mt-0 mb-1">Ajouter un theme</h4>
							</div>
							<form method="POST" action="http://inphb-mat-info.herokuapp.com/themes" class="form-horizontal">
								<input type="hidden" name="_token" value="miDa3EJv5wCTjQxVWNEzBeHvjLwyfhythVaNMjqy">
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="simpleinput">Nom</label>
											<div class="col-lg-10">
												<input required type="text" class="form-control" id="simpleinput" name="titre">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="simpleinput">Description</label>
											<div class="col-lg-10">
												<textarea type="text" class="form-control" id="simpleinput" name="description">
																					</textarea>
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