@extends('base2')

@section('title', 'Accueil')

@section('content')
  <!-- ============================================================== -->
  <!-- Start Page Content here -->
  <!-- ============================================================== -->

  <div class="content-page">
    <div class="content">
      <div class="container-fluid">
        <div class="row page-title align-items-center">
          <div class="col-sm-4 col-xl-6">
            <h4 class="mb-1 mt-0">Dashboard</h4>
          </div>
          {{-- <div class="col-sm-8 col-xl-6">
            <form class="form-inline float-sm-right mt-3 mt-sm-0">
              <div class="form-group mb-sm-0 mr-2">
                <input type="text" class="form-control flatpickr-input" id="dash-daterange" style="min-width: 190px;" readonly="readonly">
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class='uil uil-file-alt mr-1'></i>Download
                  <i class="icon"><span data-feather="chevron-down"></span></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item notify-item">
                    <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                    <span>Email</span>
                  </a>
                  <a href="#" class="dropdown-item notify-item">
                    <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                    <span>Print</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item notify-item">
                    <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                    <span>Re-Generate</span>
                  </a>
                </div>
              </div>
            </form>
          </div> --}}
        </div>

        <!-- content -->
        <div class="row">
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body p-0">
                <div class="media p-3">
                  <div class="media-body">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Enseignant
                    </span>
                    <h2 class="mb-0">3</h2>
                  </div>
                  <div class="align-self-center">
                    <div id="today-revenue-chart" class="apex-charts"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body p-0">
                <div class="media p-3">
                  <div class="media-body">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Thèmes
                    </span>
                    <h2 class="mb-0">3</h2>
                  </div>
                  <div class="align-self-center">
                    <div id="today-revenue-chart" class="apex-charts"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body p-0">
                <div class="media p-3">
                  <div class="media-body">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Etudiant
                    </span>
                    <h2 class="mb-0">5</h2>
                  </div>
                  <div class="align-self-center">
                    <div id="today-revenue-chart" class="apex-charts"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body p-0">
                <div class="media p-3">
                  <div class="media-body">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Classe
                    </span>
                    <h2 class="mb-0">2</h2>
                  </div>
                  <div class="align-self-center">
                    <div id="today-revenue-chart" class="apex-charts"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Bienvenue sur gestion MATH INFO Admin!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
      </div>
    </div>

@endsection