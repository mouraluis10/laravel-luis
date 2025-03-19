<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área do Tutor - Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
        color: #212529;
      }
      .navbar {
        background-color: #0367A6;
      }
      .navbar-brand, .nav-link {
        color: #fff !important;
      }
      .tutor-section {
        padding: 50px 0;
        text-align: center;
      }
      .tutor-section h1 {
        color: #0367A6;
      }
      .btn-primary {
        background-color: #03A65A;
        border-color: #03A65A;
      }
      .btn-primary:hover {
        background-color: #048ABF;
        border-color: #048ABF;
      }
      .footer {
        background-color: #0367A6;
        color: #fff;
        padding: 20px 0;
        text-align: center;
      }
    </style>
  </head>
  <body>
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

    <footer class="footer fixed-bottom">
      <div class="container">
        <p>&copy; 2023 Adoção de Animais de Rua. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>