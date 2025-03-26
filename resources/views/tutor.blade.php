@extends('_partials/main')

@section('conteudo')

    <div class="tutor-section">
      <div class="container">
        <h1>Área do Tutor</h1>
        <p class="lead">Gerencie suas informações e acompanhe o processo de adoção.</p>
        <div class="row mt-5">
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Meus Dados</h5>
                <p class="card-text">Atualize suas informações pessoais.</p>
                <a href="#" class="btn btn-primary">Editar Perfil</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Animais Adotados</h5>
                <p class="card-text">Veja os animais que você adotou.</p>
                <a href="#" class="btn btn-primary">Ver Animais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
@endsection