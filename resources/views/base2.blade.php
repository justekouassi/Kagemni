<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="" href="{{ asset('images/logo.png') }}">

  <!-- App css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

  <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
  {{--
  <link href="{{ asset('css/jquery.dataTables.min.css') }}" /> --}}

  <!-- plugins -->
  <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body cz-shortcut-listen="true">
  <!-- Begin page -->
  <div id="wrapper">

    <!-- Topbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/accueil">
        <img src="{{ asset('images/logo.png') }}" alt="Kagemni" width="40" />
        &nbsp;&nbsp;KAGEMNI
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
      </div>
    </nav>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
      <div class="media user-profile mt-2 mb-2">
        {{-- <img src="{{ asset('images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Avatar" /> --}}
        <img src="{{ asset('images/users/avatar-7.jpg') }}" class="avatar-xs rounded-circle mr-2" alt="Avatar" />

        <div class="media-body">
          <h6 class="pro-user-name mt-0 mb-0">Admin</h6>
          <span class="pro-user-desc">Administrateur</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
          <a class="dropdown-toggle mr-0" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
          </a>
          <div class="dropdown-menu">
            <form action="/logout" method="post">
              {{ csrf_field() }}
              <button type="submit" class="dropdown-item notify-item">
                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                <span>Déconnexion</span>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu scroll-menu">
          <ul class="metismenu" id="menu-bar">
            <li class="menu-title">Navigation</li>
            <li>
              <a href="/accueil">
                <i class="bi bi-house-door" data-feather="home"></i>
                <span> Accueil </span>
              </a>
            </li>
            <li class="menu-title">Menu</li>
            <li>
              <a href="/enseignants">
                <i class="bi bi-people" data-feather="user"></i>
                <span> Enseignants </span>
              </a>
            </li>
            <li>
              <a href="/etudiants">
                <i class="bi bi-people-fill" data-feather="users"></i>
                <span> Etudiants </span>
              </a>
            </li>
            <li>
              <a href="/classes">
                <i class="bi bi-calendar4-week" data-feather="calendar"></i>
                <span> Classes </span>
              </a>
            </li>
            <li>
              <a href="/matieres">
                <i class="bi bi-book"></i>
                <span> Matières </span>
              </a>
            </li>
            <li>
              <a href="/projets">
                <i class="bi bi-pencil-square" data-feather="book"></i>
                <span> Projets enseignants </span>
              </a>
            </li>
            <li>
              <a href="/themes">
                <i class="bi bi-folder2-open" data-feather="book"></i>
                <span> Thèmes étudiants </span>
              </a>
            </li>
          </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer" style="margin-left: 60px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            {{ date('Y') }} &copy; ING INFO 2 - Tous droits réservés.
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->

  </div>

  <!-- ============================================================== -->
  <!-- End Page content -->
  <!-- ============================================================== -->

  </div>
  <!-- END wrapper -->

  <!-- Right Sidebar -->
  <div class="right-bar">
    <div class="rightbar-title">
      <a href="javascript:void(0);" class="right-bar-toggle float-right">
        <i data-feather="x-circle"></i>
      </a>
      <h5 class="m-0">Customization</h5>
    </div>

    <div class="slimscroll-menu">

      <h5 class="font-size-16 pl-3 mt-4">Choose Variation</h5>
      <div class="p-3">
        <h6>Default</h6>
        <a href="/"><img src="{{ asset('images/layouts/verticaljpg') }}" alt="vertical"
            class="img-thumbnail demo-img" /></a>
      </div>
      <div class="px-3 py-1">
        <h6>Top Nav</h6>
        <a href="layouts-horizontal.html"><img src="{{ asset('images/layouts/horizontaljpg') }}" alt="horizontal"
            class="img-thumbnail demo-img" /></a>
      </div>
      <div class="px-3 py-1">
        <h6>Dark Side Nav</h6>
        <a href="layouts-dark-sidebar.html"><img src="{{ asset('images/layouts/vertical-dark-sidebarjpg') }}"
            alt="dark sidenav" class="img-thumbnail demo-img" /></a>
      </div>
      <div class="px-3 py-1">
        <h6>Condensed Side Nav</h6>
        <a href="layouts-dark-sidebar.html"><img src="{{ asset('images/layouts/vertical-condensedjpg') }}"
            alt="condensed" class="img-thumbnail demo-img" /></a>
      </div>
      <div class="px-3 py-1">
        <h6>Fixed Width (Boxed)</h6>
        <a href="layouts-boxed.html"><img src="{{ asset('images/layouts/boxedjpg') }}" alt="boxed"
            class="img-thumbnail demo-img" /></a>
      </div>
    </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- Vendor js -->
  <script src="{{ asset('js/vendor.min.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- optional plugins -->
  <script src="{{ asset('libs/moment/moment.min.js') }}"></script>
  <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>

  <!-- page js -->
  <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.min.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.table').DataTable();
    });
  </script>

</body>

</html>