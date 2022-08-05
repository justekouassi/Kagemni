@extends('base2')

@section("title", "Création d'un nouvel étudiant")

@section('content')

<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row page-title">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Accueil</a></li>
              <li class="breadcrumb-item"><a href="/etudiants">etudiants</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a>Ajouter</a></li>
            </ol>
          </nav>
          <h4 class="mb-1 mt-0">etudiants</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2">
                <h4 class="header-title mt-0 mb-1">Ajouter un etudiant</h4>
              </div>
              <form method="post" action="/etudiants/create">
                {{ csrf_field() }}
                
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="nom">Nom</label>
                      <div class="col-lg-10">
                        <input required type="text" class="form-control" id="nom" name="nom">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="prenom">Prénoms</label>
                      <div class="col-lg-10">
                        <input required type="text" class="form-control" id="prenom" name="prenom">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="sexe">Sexe</label>
                      <div class="col-lg-10">
                        <input required type="text" class="form-control" id="sexe" name="sexe">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="tel">Téléphone</label>
                      <div class="col-lg-10">
                        <input required type="text" name="tel" class="form-control" id="tel" placeholder="+225 0748502093">
                      </div>
                    </div>
										<div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="email">Email</label>
                      <div class="col-lg-10">
                        <input required type="email" class="form-control" id="email" name="email">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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