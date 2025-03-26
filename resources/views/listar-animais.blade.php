@extends('_partials/main')

@section('conteudo')

    <div class="animal-list-section">
      <div class="container">
        <h1 class="text-center mb-5">Animais Disponíveis para Adoção</h1>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Cachorro">
              <div class="card-body">
                <h5 class="card-title">Cachorro</h5>
                <p class="card-text">Um cachorro muito amigável e brincalhão.</p>
                <a href="{{ route('DetalhesAnimal', 1) }}" class="btn btn-primary">Ver Detalhes</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Gato">
              <div class="card-body">
                <h5 class="card-title">Gato</h5>
                <p class="card-text">Um gato carinhoso e tranquilo.</p>
                <a href="{{ route('DetalhesAnimal', 2) }}" class="btn btn-primary">Ver Detalhes</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Coelho">
              <div class="card-body">
                <h5 class="card-title">Coelho</h5>
                <p class="card-text">Um coelho fofo e cheio de energia.</p>
                <a href="{{ route('DetalhesAnimal', 3) }}" class="btn btn-primary">Ver Detalhes</a>
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