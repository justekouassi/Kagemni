<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<title>@yield('title') | {{ env('APP_NAME') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon --->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}"/>
	<link href="{{ asset('css/jquery.dataTables.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

	<!-- plugins -->
	<link rel="stylesheet" type="text/css" href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="/accueil">
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
						{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li> --}}

						<img src="{{ asset('images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Avatar" />
						<h6 class="mt-0 mb-0">Admin</h6>
						<span class="pro-user-desc">{{ auth()->user()->email_admin }}</span>
						<li class="menu-title">Navigation</li>
						<li>
							<a class="nav-link" href="/accueil">
								<i class="bi bi-house-door" data-feather="home"></i>
								<span> Accueil </span>
							</a>
						</li>
						<li class="menu-title">Menu</li>
						<li class="nav-item">
							<a class="nav-link" href="/enseignants">
								<i class="bi bi-people" data-feather="user"></i>
								<span> Enseignants </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/etudiants">
								<i class="bi bi-people-fill" data-feather="users"></i>
								<span> Etudiants </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/classes">
								<i class="bi bi-calendar4-week" data-feather="calendar"></i>
								<span> Classes </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/matieres">
								<i class="bi bi-book"></i>
								<span> Matières </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/projets">
								<i class="bi bi-pencil-square" data-feather="book"></i>
								<span> Projets enseignants </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/themes">
								<i class="bi bi-folder2-open" data-feather="book"></i>
								<span> Thèmes étudiants </span>
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
	</nav>

	<main>

		@yield('content')

	</main>

	<!-- Footer Start -->
	<footer class="footer" style="margin-left: 60px">
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- optional plugins -->
	<script src="{{ asset('libs/moment/moment.min.js') }}"></script>
	<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>

	<!-- page js -->
	<script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

	<!-- App js -->
	<script src="{{ asset('js/app.min.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

	<script>
		$(document).ready(function () {
			$('.table').DataTable();
		});
	</script>

</body>

</html>