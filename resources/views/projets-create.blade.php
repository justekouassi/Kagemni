@extends('base2')

@section("title", "Ajout d'un nouveau projet")

@section('content')

<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row page-title">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
              <li class="breadcrumb-item"><a href="/projets">Projets</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a>Ajouter</a></li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2">
                <h4 class="header-title mt-0 mb-1">Ajouter un projet</h4>
              </div>

							<?php $projets = \App\Models\Projet::all(); ?>

              <form method="post" action="/projets/create">
                @csrf
                
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="projet">Projet</label>
                      <div class="col-lg-10">
                        <input required type="text" class="form-control" id="projet" name="projet">
                      </div>
                      <label class="col-lg-2 col-form-label" for="debut">Début</label>
											<div class="col-lg-10">
                        <input required type="date" class="form-control" id="debut" name="debut">
                      </div>
                      <label class="col-lg-2 col-form-label" for="fin">Fin</label>
											<div class="col-lg-10">
                        <input required type="date" class="form-control" id="fin" name="fin">
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