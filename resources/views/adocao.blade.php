<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção - Adoção de Animais</title>
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
      .adoption-section {
        padding: 50px 0;
        text-align: center;
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

    <div class="adoption-section">
      <div class="container">
        <h1>Processo de Adoção</h1>
        <p class="lead">Preencha o formulário abaixo para iniciar o processo de adoção.</p>
        <form>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu email">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone">
          </div>
          <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
        </form>
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