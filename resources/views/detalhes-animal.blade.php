@extends('_partials/main')

@section('conteudo')
 
    <div class="animal-detail-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://via.placeholder.com/500" alt="Cachorro">
          </div>
          <div class="col-md-6">
            <h1>Cachorro</h1>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> Vira-lata</p>
            <p><strong>Descrição:</strong> Um cachorro muito amigável e brincalhão, pronto para fazer parte da sua família.</p>
            <a href="{{ route('adocao') }}" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


@endsection
