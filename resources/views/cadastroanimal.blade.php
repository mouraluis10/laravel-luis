
@extends('_partials/main')

@section('conteudo')


    <div class="register-section">
      <div class="container">
        <div class="register-form">
          <h2>Cadastro Animal</h2>
          <form action="{{ route('cadastroanimal') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do animal">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Cor</label>
              <input type="text" class="form-control" id="email" name="cor" placeholder="Digite a cor do animal">
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Peso</label>
              <input type="text" class="form-control" id="senha" name="peso" placeholder="Digite o peso do animal">
            </div>
            <div class="mb-3">
              <label for="confirmar-senha" class="form-label">Idade</label>
              <input type="number" class="form-control" id="confirmar-senha" name="idade" placeholder="Digite a idade do animal">
            </div>
            <div class="mb-3">
              <label for="confirmar-senha" class="form-label">Especie</label>
              <input type="text" class="form-control" id="confirmar-senha" name="especie" placeholder="Digite a especie do animal">
            </div>
            <div class="mb-3">
              <label for="confirmar-senha" class="form-label">Raça</label>
              <input type="text" class="form-control" id="confirmar-senha" name="raca" placeholder="Digite a Raça do animal">
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar</button>
            <p class="mt-3">Já tem uma conta? <a href="{{ route('login') }}" style="color: #0367A6;">Faça login aqui</a></p>
          </form>
        </div>
      </div>
    </div>
    @endsection
