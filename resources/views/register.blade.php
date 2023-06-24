@extends('layout.main')
@section('title', 'Cadastrar')

@section('content')

<div class="register">
  <h1>Cadastre-se agora mesmo</h1>
  <p>e participe dessa brincadeira</p>
  <h2>Preencha seus dados abaixo</h2>
    <form action="/register" method="POST">
      @csrf
      <div class="gridLoginOrRegister">
        <label for="nameRegister">Nome:</label>
        <ion-icon name="happy"></ion-icon>
        <input type="text" name="name" id="nameRegister" placeholder="João da Silva">

        <label for="nameRegister">Data de nascimento:</label>
        <ion-icon name="calendar-number"></ion-icon>
        <input type="date" name="name" id="nameRegister">

        <label for="nameRegister">E-mail:</label>
        <ion-icon name="mail"></ion-icon>
        <input type="email" name="name" id="nameRegister" placeholder="example@example.com">

        <label for="nameRegister">Senha:</label>
        <ion-icon name="lock-closed"></ion-icon>
        <input type="password" name="name" id="nameRegister" placeholder="*********">
      </div>
      <div class="buttons">
        <input type="reset" value="Limpar">
        <input type="submit" value="Cadastrar">
      </div>
    </form>
</div>

@endsection
