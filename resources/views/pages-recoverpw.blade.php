<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8" />
  <title>Recover Password | Shreyu - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico">

  <!-- App css -->
  <link href="{{ asset('css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
  <link href="{{ asset('css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

  <link href="{{ asset('css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
  <link href="{{ asset('css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

  <!-- icons -->
  <link href="{{ asset('css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

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
                    <a href="/">
                      <img src="{{ asset('images/logo-dark.png" alt="" height="24" />
                    </a>
                  </div>

                  <h6 class="h5 mb-0 mt-3">Reset Password</h6>
                  <p class="text-muted mt-1 mb-4">Enter your email address and we'll send you an email with instructions
                    to reset your password.</p>

                  <form action="#" class="authentication-form">
                    <div class="mb-3">
                      <label class="form-label">Email Address</label>
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="icon-dual" data-feather="mail"></i>
                        </span>
                        <input type="email" class="form-control" id="email" placeholder="hello@coderthemes.com">
                      </div>
                    </div>

                    <div class="mb-0 text-center">
                      <button class="btn btn-primary w-100" type="submit"> Submit</button>
                    </div>
                  </form>

                </div>
                <div class="col-lg-6 d-none d-lg-inline-block">
                  <div class="auth-page-sidebar">
                    <div class="overlay"></div>
                    <div class="auth-user-testimonial">
                      <p class="fs-24 fw-bold text-white mb-1">I simply love it!</p>
                      <p class="lead">"It's a elegent templete. I love it very much!"</p>
                      <p>- Admin User</p>
                    </div>
                  </div>
                </div>
              </div>

            </div> <!-- end card-body -->
          </div>
          <!-- end card -->

          <div class="row mt-3">
            <div class="col-12 text-center">
              <p class="text-muted">Back to <a href="pages-login.html" class="text-primary fw-bold ms-1">Login</a></p>
            </div> <!-- end col -->
          </div>
          <!-- end row -->

        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->

  <!-- Vendor js -->
  <script src="{{ asset('js/vendor.min.js"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.min.js"></script>

</body>

</html>