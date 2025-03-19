@extends('_partials/main')

@section('conteudo')
<nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">Adoção de Animais</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('inicio') }}">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adocao') }}">Adocao</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('DetalhesAnimal') }}">Detalhes Animal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ListarAnimais') }}">Listar Animais</a>
            </li>

           
          </ul>
        </div>
      </div>
    </nav>

    <div class="hero-section">
      <div class="container">
        <h1>Adote um Amigo</h1>
       
      </div>
    </div>

    <div class="container my-5">
      <h2 class="text-center mb-4">Animais Disponíveis para Adoção</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Um cachorro muito amigável e brincalhão, pronto para fazer parte da sua família.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Um gato carinhoso e tranquilo, perfeito para quem busca um companheiro calmo.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Um coelho fofo e cheio de energia, ideal para quem gosta de animais diferentes.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais de Rua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
   

    <footer class="footer fixed-bottom">
      <div class="container">
        <p>&copy; 2023 Adoção de Animais de Rua. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>