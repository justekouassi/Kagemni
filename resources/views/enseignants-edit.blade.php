@extends('base2')

@section("title", "Mise à jour d'un enseignant")

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#">Enseignants</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a>Modifier</a></li>
                            </ol>
                        </nav>
                        <h4 class="mb-1 mt-0">Enseignants</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-2">
                                    <h4 class="header-title mt-0 mb-1">Modifier enseignant</h4>
                                </div>
                                <form method="POST" action="http://inphb-mat-info.herokuapp.com/enseignants/1"
                                    class="form-horizontal">
                                    <input type="hidden" name="_method" value="PUT"> <input type="hidden"
                                        name="_token" value="J3eKXKzbV4U3TC6QXwDIywR2BQcW0ufo4cUalrkc">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="simpleinput">Nom</label>
                                                <div class="col-lg-10">
                                                    <input required type="text" class="form-control" id="simpleinput"
                                                        name="nom" value="konan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="simpleinput">Prenoms</label>
                                                <div class="col-lg-10">
                                                    <input required type="text" class="form-control" id="simpleinput"
                                                        name="prenom" value="Kouadio bertin">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-email">Date de
                                                    naissance</label>
                                                <div class="col-lg-10">
                                                    <input required type="date" class="form-control" name="dob"
                                                        value="2021-06-17">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-email">Numéro de
                                                    téléphone</label>
                                                <div class="col-lg-10">
                                                    <input required type="text" name="tel" class="form-control"
                                                        placeholder="+225 0748502093" value="+2250748502093">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    @endsection
