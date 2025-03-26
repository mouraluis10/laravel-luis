@extends('_partials/main')

@section('conteudo')


    <div class="login-section">
      <div class="container">
        <div class="login-form">
          <h2>Login</h2>
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
            <p class="mt-3">Não tem uma conta? <a href="{{ route('registro') }}" style="color: #0367A6;">Registre-se aqui</a></p>
          </form>
        </div>
      </div>
    </div>
@endsection
