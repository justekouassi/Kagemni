<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#fff"/>
	<meta name="author" content="Juste KOUASSI"/>
	<meta name="copyright" content="Tout droit réservé à Juste KOUASSI sur ce site web"/>
	<meta name="description" content="KAGEMNI est une plateforme web de gestion des activités des enseignants dans un département académique"/>
	<meta name="keywords" content="kagemni, site web kagemni, site internet kagemni, plateforme web de gestion, kagemni cote d'ivoire, kagemni web, dfrmi"/>

	<title>@yield('title') | {{ env('APP_NAME') }}</title>

	<!-- Favicon --->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- Jquery css -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	<!-- Perso css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="/accueil" style="margin: auto">
				<img src="{{ asset('images/logo.png') }}" alt="Kagemni" width="30"/>
				&nbsp;KAGEMNI
			</a>
			<br>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#my-navbar" aria-controls="my-navbar">
				<i class="bi bi-list"></i>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="my-navbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Juste KOUASSI</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					{{-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> --}}
						<div style="display: column; margin-top: 40px">
						<li class="menu-title">Administrateur</li>
							{{-- <img src="/storage/{{ auth()->user()->avatar }}" class="avatar-sm rounded-circle mr-2" alt="Avatar" style="margin: auto;"/> --}}
							<span class="nav-link" style="margin: auto">{{ auth()->user()->email_admin }}</span>
						</div>
						
						<li class="menu-title">Navigation</li>
						<li>
							<a class="nav-link" href="/accueil">
								<i class="bi bi-house-door"></i>
								<span> Accueil </span>
							</a>
						</li>
						<li class="menu-title">Menu</li>
						<li class="nav-item">
							<a class="nav-link" href="/enseignants">
								<i class="bi bi-person"></i>
								<span> Enseignants </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/etudiants">
								<i class="bi bi-people"></i>
								<span> Etudiants </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/classes">
								<i class="bi bi-calendar4-week"></i>
								<span> Classes </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/cours">
								<i class="bi bi-book"></i>
								<span> Cours </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/encadrements">
								<i class="bi bi-star"></i>
								<span> Encadrements </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/projets">
								<i class="bi bi-pencil-square"></i>
								<span> Projets enseignants </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/themes">
								<i class="bi bi-folder2-open"></i>
								<span>Thèmes étudiants</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-warning" href="/logout">
								<i class="bi bi-escape"></i>
								<span>Déconnexion</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<main>
		@yield('content')
	</main>

	<!-- Footer -->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					{{ date('Y') }} &copy; Juste KOUASSI - Tous droits réservés.
				</div>
			</div>
		</div>
	</footer>

	<!-- Vendor js -->
	<script src="{{ asset('js/vendor.min.js') }}"></script>

	<!-- Bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Jquery js -->
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.table').DataTable({
				language: {
					url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
				}
			});
		});
	</script>

	<!-- App js -->
	<script src="{{ asset('js/app.js') }}"></script>
	<noscript>Veuillez activer JavaScript svp !</noscript>

</body>

</html>