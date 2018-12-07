@extends('layouts.app')

@section('titulo')
Nova Mensagem
@endsection

@section('painel')
@endsection

@section('conteudo')
<form class="" action="{{route('mensagem.salvarmensagem')}}" method="post">
  @csrf
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Nova Mensagem</div>
              <div class="card-body">
                <div class="form-group" id="mensagens">
                  <label for="titulomensagem">Título</label>
                  <input type="text" name="titulomensagem" class="form-control" placeholder="Dê um título para sua mensagem...">
                </div>
                <div class="form-group">
                  <label for="corpomensagem">Corpo de texto</label>
                  <textarea class="form-control" rows="3" placeholder="Deixe aqui a sua mensagem" name="corpomensagem"></textarea>
                </div>
                <label for="categoriamensagem">Categoria</label>
                <select class="form-control" name="categoriamensagem">
                  <option selected disabled>Selecione uma categoria</option>
                  <option value="1">categoria 1</option>
                  <option value="2">categoria 2</option>
                  <option value="3">categoria 3</option>
                </select>
                <br><br>
                  <input type="submit" value="Publicar mensagem">
              </div>
          </div>
      </div>
  </div>

</form>

@endsection