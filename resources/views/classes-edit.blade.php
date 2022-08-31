@extends('base2')

@section("title", "Mise à jour d'une classe")

@section('content')

<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row page-title">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
              <li class="breadcrumb-item"><a href="/classes">Classe</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a>Modifier</a></li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2">
                <h4 class="header-title mt-0 mb-1">Ajouter une classe</h4>
              </div>

              <form method="post" action="/classes/{{$classe->id}}/edit">
                @csrf
                
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="nom">Classe</label>
                      <div class="col-lg-10">
                        <input required type="text" class="form-control" id="nom" name="nom" value="{{$classe->libelle_classe}}">
                      </div>
                      <label class="col-lg-2 col-form-label" for="filiere">Filière</label>
											<div class="col-lg-10">
                        <input required type="text" class="form-control" id="filiere" name="filiere" value="{{$classe->filiere}}">
                      </div>
                      <label class="col-lg-2 col-form-label" for="ecole">Ecole</label>
											<div class="col-lg-10">
                        <input required type="text" class="form-control" id="ecole" name="ecole" value="{{$classe->ecole}}">
                      </div>
											<label class="col-lg-2 col-form-label" for="annee">Année scolaire</label>
											<div class="col-lg-10">
                        <input required type="text" class="form-control" id="annee" name="annee" value="{{$classe->annee_scolaire}}">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary modification">Modifier</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection