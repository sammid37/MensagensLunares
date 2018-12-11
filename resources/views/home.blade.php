@extends('layouts.app')

@section('titulo')
Bem-vindo
@endsection

@section('conteudo')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Minhas mensagens</div>
            
            <div class="card-body">
              <b>Visualize aqui as suas mensagens lunares!</b>
              <br><br>
              <ul class="list-group">                
                @forelse ($messages as $mensagem)
                    <li class="list-group-item">
                      <a href="/mensagem/{{ $mensagem->id }}">
                          {{ $mensagem->titulomensagem }}
                        </a>
                      </li>
                @empty
                  <p>Sem mensagens</p>
                @endforelse
              </ul>
              <br>
              <a href="{{ route('mensagem.novamensagem') }}" class="btn btn-primary card-link">Deixe mais mensagens!</a>
            </div>
            
        </div>
    </div>
</div>"

@endsection
