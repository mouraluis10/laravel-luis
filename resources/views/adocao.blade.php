@extends('_partials/main')

@section('conteudo')
 
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

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
 