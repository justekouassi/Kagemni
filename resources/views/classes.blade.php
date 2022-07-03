@extends('base2')

@section('title', 'Classes')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <br>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-2">
                    <h4 class="header-title mt-0 mb-1">Liste des classes </h4>
                    <a class="ml-auto btn btn-primary"
                      href="classes/create">Ajouter</a>
                  </div>

                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">N°</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Filière</th>
                          <th scope="col">Ecole</th>
                          <th scope="col">Année scolaire</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $classes = \App\Models\Classe::all(); ?>
                        @foreach ($classes as $classe)
                          <tr>
                            <th scope="row">{{$classe->id}}</th>
                            <td>{{$classe->libelle_classe}}</td>
                            <td>{{$classe->filiere}}</td>
                            <td>{{$classe->ecole}}</td>
                            <td>{{$classe->annee_scolaire}}</td>
                            <td>
                              <form action="classes/{{$classe->id}}" method="POST">
                                {{ csrf_field() }}
                                
                                <a href="classes/{{$classe->id}}/edit"
                                  class="btn btn-primary btn-sm">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                  </svg>
                                </a>
                                <input type="hidden" name="_token" value="vPftAUcH6QB4Usq2uUP3w96TakMbesl6hXXxoEkr">
                                <input type="hidden" name="_method" value="DELETE"> <button type="submit"
                                  class="btn btn-danger btn-sm">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                      d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                  </svg>
                                </button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

@endsection