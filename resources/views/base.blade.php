<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="title" content="Kagemni | plateforme web de gestion"/>
	<meta name="description" content="KAGEMNI est une plateforme web de gestion des activités des enseignants du Département de Formation et de Recherche Mathématiques Informatique (DFRMI) de l'Institut National Polytechnique Félix Houphouët-Boigny"/>
	<meta name="robots" content="index, follow"/>

	<link rel="canonical" href="https://kagemni.herokuapp.com">

	<meta property="og:title" content="Kagemni | Plateforme web de gestion"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="https://kagemni.herokuapp.com/favicon.ico"/>
	<meta property="og:image:type" content="image/jpeg"/>
	<meta property="og:image:width" content="400"/>
	<meta property="og:image:height" content="400"/>
	<meta property="og:url" content="https://kagemni.herokuapp.com"/>
	<meta property="og:description" content="Kagemni, plateforme web de gestion des activités des enseignants du DFRMI."/>

	<!-- Favicon --->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- App css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}"/>
	
	<title>@yield("title") | {{env('APP_NAME')}}</title>
</head>

@yield("content")

	<script>
		e = true
		function changer() {
			if(e) {
				document.getElementById("password").setAttribute("type", "text")
				document.getElementById("eye").setAttribute("class", "bi bi-eye")
				e = false
			} else {
				document.getElementById("password").setAttribute("type", "password")
				document.getElementById("eye").setAttribute("class", "bi bi-eye-slash")
				e = true
			}
		}
	</script>

</body>
</html>