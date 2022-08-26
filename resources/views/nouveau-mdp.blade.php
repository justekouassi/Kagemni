@extends('base')

@section("title", "Modification de mot de passe")

@section('content')

<body>

<div class="my-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="card">
					<div class="card-body p-0">
						<div class="row g-0">
							<div class="col-lg-6 p-4">
								<div class="mx-auto">
									<a href="/" style="text-decoration: none">
										<img src="{{ asset('images/logo.png') }}" alt="Kagemni" width="30" />
										&nbsp;&nbsp;<span style="font-family: cursive">KAGEMNI</span>
									</a>
								</div>

								<h6 class="h5 mb-0 mt-3">Bienvenue administrateur</h6>
								<p class="text-muted mt-1 mb-4">Inscrivez votre nouveau mot de passe</p>

								<form method="POST" action="/nouveau-mdp">
									{{ csrf_field() }}
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
												<i class="bi bi-lock" data-feather="lock"></i>
											</span>
											<input type="password" class="form-control" name="password" placeholder="admin" required>
										</div>
										@if ($errors->has('password'))
										<p style="color: red">{{ $errors->first('password') }}</p>
										@endif
									</div>

									<div class="mb-3">
										<label class="form-label" for="password_confirmation">Confirmation mot de passe</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-lock" data-feather="lock"></i>
											</span>
											<input type="password" class="form-control" name="password_confirmation" placeholder="admin" required>
										</div>
										@if ($errors->has('password'))
										<p style="color: red">{{ $errors->first('password') }}</p>
										@endif
									</div>

									<div class="mb-3 text-center d-grid">
										<button class="btn btn-success" type="submit">MODIFIER MOT DE PASSE</button>
									</div>
								</form>
								
							</div>
							<div class="col-lg-6 d-none d-md-inline-block">
								<div class="auth-page-sidebar">
									<div class="overlay"></div>
									<div class="auth-user-testimonial">
										<p class="fs-24 fw-bold text-white mb-1">DFRMI</p>
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
</div>

@endsection
