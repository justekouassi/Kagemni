<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8"/>
  <title>@yield("title") | {{env('APP_NAME')}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Favicon --->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- App css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}"/>

</head>

@yield("content")

  <!-- Vendor js -->
  <script src="{{ asset('js/vendor.min.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>