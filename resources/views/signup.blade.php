@extends('base')

@section("title", "Inscription")

@section('content')

<body>

<div class="container my-5">
	<div class="row justify-content-center">
		<div class="col-xl-10">
			<div class="card">
				<div class="card-body p-0">
					<div class="row g-0">
						<div class="col-lg-6 p-4">
							<div class="mx-auto">
								<a href="/login" style="text-decoration: none">
									<img src="{{ asset('images/logo.png') }}" alt="Kagemni" width="30" />
									&nbsp;&nbsp;<span style="font-family: cursive">KAGEMNI</span>
								</a>
							</div>

							<h6 class="h5 mb-0 mt-3">Bienvenue cher gestionnaire</h6>
							<p class="text-muted mt-1 mb-4">Tout d'abord, enregistrez-vous avant de continuer l'aventure !</p>

							<form method="POST" action="/signup" enctype="multipart/form-data">
								@csrf
								<div class="mb-3">
									<label class="form-label" for="email">Adresse email</label>
									<div class="input-group">
										<span class="input-group-text">
											<i class="bi bi-envelope" data-feather="mail"></i>
										</span>
										<input type="email" class="form-control" name="email" placeholder="admin@inphb.ci" required>
									</div>
									@if ($errors->has('email'))
									<p style="color: red">{{ $errors->first('email') }}</p>
									@endif
								</div>

								<div class="mb-3">
									<label class="form-label" for="password">Mot de passe</label>
									<div class="input-group">
										<span class="input-group-text">
											<i class="bi bi-lock"></i>
										</span>
										<input type="password" class="form-control" id="password" name="password" placeholder="admin" required>
										<span class="input-group-text" onclick="changer()">
											<i class="bi bi-eye-slash" id="eye"></i>
										</span>
									</div>
									@if ($errors->has('password'))
									<p style="color: red">{{ $errors->first('password') }}</p>
									@endif
								</div>

								@if (auth()->check() && auth()->user()->role == "Administrateur")
									<div class="mb-3">
										<label class="form-label" for="role">Rôle utilisateur</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-question"></i>
											</span>
											<select required name="role" class="form-select" id="role">
												<option selected disabled value="">* Choisir le rôle *</option>
												<option value="Administrateur">Administrateur</option>
												<option value="Collaborateur">Collaborateur</option>
												<option value="Visiteur">Visiteur</option>
											</select>
										</div>
									</div>	
								@endif

								<div class="mb-3">
									<label class="form-label" for="avatar">Photo de profil</label>
									<div class="input-group">
										<input type="file" class="form-control" name="avatar">
									</div>
								</div>

								<div class="mb-3 text-center d-grid">
									<button class="btn btn-success" type="submit">S'INSCRIRE</button>
								</div>
							</form>
							
						</div>
						<div class="col-lg-6 d-md-inline-block">
							<div class="auth-page-sidebar">
								<div class="overlay"></div>
								<div class="auth-user-testimonial">
									<p class="fw-bold text-white mb-1">DFRMI</p>
									<p class="lead">"Département de Formation et de Recherche en Mathématiques et Informatique"</p>
									<p>KAGEMNI</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
