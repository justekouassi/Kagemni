<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <title>@yield("title") | {{env('APP_NAME')}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

  <!-- App css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

</head>

@yield("content")

  <!-- Vendor js -->
  <script src="{{ asset('js/vendor.min.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>