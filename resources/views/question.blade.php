@extends('layout.main')
@section('title', 'Pergunta')

@section('content')

<div class="question">
  <h1>Nível: <span>NORMAL</span></h1>
  <div class="questionContainer">
    <h1>COCA-COLA vs PEPSI</h1>
    <p>Subtitulo</p>
    <img src="../images/questions/coca-cola.png">
    <img src="../images/questions/pepsi.jpg">
    <h2>Qual você prefere?</h2>
    <div class="respond">
      <form action="">
        <input type="submit" value="Resposta 1">
      </form>
      <form action="">
        <input type="submit" value="Resposta 2">
      </form>
    </div>
  </div>

</div>

@endsection
