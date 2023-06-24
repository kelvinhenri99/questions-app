@extends('layout.main')
@section('title', 'Início')

@section('content')

<div class="about">
  <h1>O porquê desse projeto?</h1>
  <p>Esse projeto foi pensado para analisar se as respostas são influênciadas pela idade dos usuários</p>
  <h1>Como funciona?</h1>
  <p>Existem diversas perguntas no sistemas para serem respondidas com sinceridade</p>
  <h1>Níveis das perguntas</h1>
  <p>Existem dois niveis, o normal e o dificil</p>
</div>

<div class="questionContainerEasy">
  <h1>Perguntas NORMAL</h1>
</div>

<div class="questionContainerHard">
  <h1>Perguntas DIFICIL</h1>
</div>

@endsection
