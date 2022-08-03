@extends('base')

@section("title", "Connexion")

@section('content')

<body class="authentication-bg">

  <div class="account-pages my-5">
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

                  <h6 class="h5 mb-0 mt-3">Bienvenue cher administrateur</h6>
                  <p class="text-muted mt-1 mb-4">Entrez votre adresse mail et votre de passe pour accéder au panel administrateur.</p>

                  <form action="/" method="POST" class="authentication-form">
                    {{ csrf_field() }}
                    <div class="mb-3">
                      <label class="form-label">Adresse email</label>
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="bi bi-envelope" data-feather="mail"></i>
                        </span>
                        <input type="email" class="form-control" name="email" placeholder="admin@inphb.ci" required>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Mot de passe</label>
                      <a href="/pages-recoverpw" class="float-end text-muted text-unline-dashed ms-1">Mot de passe oublié ?</a>
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

                    <div class="mb-3 text-center d-grid">
                      <button class="btn btn-primary" type="submit">SE CONNECTER</button>
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

            </div> <!-- end card-body -->
          </div>

        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->

@endsection
