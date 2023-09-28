@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Artigo</h1>
    
    <form action="{{ route('admin.atualizar', ['id' => $artigo->id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $artigo->titulo }}">
        </div>
       
        <div class="form-group">
            <label for="conteudo">Conteúdo:</label>
            <textarea class="form-control" id="conteudo" name="conteudo">{{ $artigo->conteudo }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
