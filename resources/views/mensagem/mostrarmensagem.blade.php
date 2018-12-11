@extends('layouts.app')

@section('titulo')
Exibir mensagens
@endsection

@section('conteudo')
<div class="card">
  <div class="card-body">
    <div class="card-title">
      <h3>{{$mensagem['titulomensagem']}} </h3>
    </div>
    <p>{{$mensagem['corpomensagem']}}</p>
    <br>
    <a href="#" class="card-link">Categoria: {{$mensagem['categoriamensagem']}}</a>
  </div>
</div>
<br>
<br>
<a href="{{route('mensagem.novamensagem')}}" class="btn btn-primary">Escrever nova mensagem</a>
<a href="{{route('home')}}" class="btn btn-primary">Voltar a tela inicial</a>
@endsection
