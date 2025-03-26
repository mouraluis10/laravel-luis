
@extends('_partials/main')

@section('conteudo')


    <div class="register-section">
      <div class="container">
        <div class="register-form">
          <h2>Registro</h2>
          <form action="{{ route('registro') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome" name="nome_completo" placeholder="Digite seu nome completo">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="mb-3">
              <label for="confirmar-senha" class="form-label">Confirmar Senha</label>
              <input type="password" class="form-control" id="confirmar-senha" name="confirmar_senha" placeholder="Confirme sua senha">
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar</button>
            <p class="mt-3">Já tem uma conta? <a href="{{ route('login') }}" style="color: #0367A6;">Faça login aqui</a></p>
          </form>
        </div>
      </div>
    </div>
    @endsection
