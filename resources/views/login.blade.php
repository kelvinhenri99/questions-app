@extends('layout.main')
@section('title', 'Entrar')

@section('content')

<div class="login">
  <h1>Entrar no sistema</h1>
  <p>seja bem-vindo(a)</p>
  <h2>Preencha as suas credenciais</h2>
    <form action="/register" method="POST">
      @csrf
      <div class="gridLoginOrRegister">

        <label for="nameRegister">E-mail:</label>
        <ion-icon name="mail"></ion-icon>
        <input type="email" name="name" id="nameRegister" placeholder="example@example.com">

        <label for="nameRegister">Senha:</label>
        <ion-icon name="lock-closed"></ion-icon>
        <input type="password" name="name" id="nameRegister" placeholder="*********">
      </div>
      <div class="buttons">
        <input type="reset" value="Limpar">
        <input type="submit" value="Entrar">
      </div>
    </form>
</div>

@endsection
