<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="title" content="Kagemni | plateforme web de gestion"/>
	<meta name="description" content="KAGEMNI est une plateforme web de gestion des activités des enseignants du Département de Formation et de Recherche Mathématiques Informatique de l'INPHB"/>
	<meta name="robots" content="index, follow"/>

	<link rel="canonical" href="https://kagemni.justekouassi.com">

	<meta property="og:title" content="Kagemni | Plateforme web de gestion"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="https://kagemni.justekouassi.com/favicon.ico"/>
	<meta property="og:image:type" content="image/jpeg"/>
	<meta property="og:image:width" content="400"/>
	<meta property="og:image:height" content="400"/>
	<meta property="og:url" content="https://kagemni.justekouassi.com"/>
	<meta property="og:description" content="Kagemni, plateforme web de gestion des activités des enseignants du DFRMI."/>

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
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

	<!-- Perso css -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

	<title>@yield('title') | {{ env('APP_NAME') }}</title>
</head>

<body>
	<div class="d-flex align-items-stretch">
		<nav id="sidebar" class="active">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="bi bi-list"></i>
				</button>
			</div>
			<div class="p-4">
				<h1><a href="/" class="logo">Kagemni</a></h1>
				<ul class="list-unstyled components mb-5">
					<div style="display: column; margin-top: 40px">
						<li class="menu-title">
							{{ auth()->user()->role ?? "Bienvenue cher visiteur" }}
						</li>
						@if (auth()->check() && auth()->user()->role == 'Administrateur' )
							<img src="/storage/{{ auth()->user()->avatar ?? '' }}" class="avatar-sm rounded-circle mr-2" alt="Avatar"/>
							<span class="email-admin">
								{{ auth()->user()->email_admin }}
							</span>
						@endif
					</div>
					<li class="nav-item {{request()->is('/') ? 'active' : ''}}">
						<a class="nav-link" href="/">
							<i class="bi bi-house-door"></i>
							<span>Accueil</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('enseignants') ? 'active' : ''}}">
						<a class="nav-link" href="/enseignants">
							<i class="bi bi-person"></i>
							<span>Enseignants</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('etudiants') ? 'active' : ''}}">
						<a class="nav-link" href="/etudiants">
							<i class="bi bi-people"></i>
							<span>Etudiants</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('classes') ? 'active' : ''}}">
						<a class="nav-link" href="/classes">
							<i class="bi bi-calendar4-week"></i>
							<span>Classes</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('cours') ? 'active' : ''}}">
						<a class="nav-link" href="/cours">
							<i class="bi bi-book"></i>
							<span>Cours</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('encadrements') ? 'active' : ''}}">
						<a class="nav-link" href="/encadrements">
							<i class="bi bi-star"></i>
							<span>Encadrements</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('projets') ? 'active' : ''}}">
						<a class="nav-link" href="/projets">
							<i class="bi bi-pencil-square"></i>
							<span>Projets enseignants</span>
						</a>
					</li>
					<li class="nav-item {{request()->is('themes') ? 'active' : ''}}">
						<a class="nav-link" href="/themes">
							<i class="bi bi-folder2-open"></i>
							<span>Thèmes étudiants</span>
						</a>
					</li>
					@if (auth()->check() && auth()->user()->role == "Administrateur")
						<li class="nav-item logout">
							<a class="nav-link" href="/logout">
								<i class="bi bi-escape"></i>
								<span>Déconnexion</span>
							</a>
						</li>
					@endif
				</ul>

				<footer class="footer">
					{{ date('Y') }} &copy; <a href="https://justekouassi.com">Juste KOUASSI</a> - Tous droits réservés.
				</footer>
			</div>
		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			@yield('content')
		</div>
	</div>

	<!-- Vendor js -->
	<script src="{{ asset('js/vendor.min.js') }}"></script>

	<!-- Bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Jquery js -->
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
	
	<script>
		$(document).ready(function () {
			$('.table').DataTable({
				language: {
					url: "{{ asset('js/datatable-french.json') }}"
				},
				dom: 'Blfrtip',
				buttons: [
					{
						extend: 'print',
						text: 'Imprimer'
					}
  			]
			});
		});
	</script>

	<!-- App js -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	@yield('javascript')
	<noscript>Veuillez activer JavaScript svp !</noscript>

</body>
</html>