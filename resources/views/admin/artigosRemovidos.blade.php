@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{ route('admin.index') }}">
                <button class="btn btn-sm btn-secondary mb-3">Voltar</button>
            </a>
            @foreach ($artigos as $artigo)
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-text">Título: {!! $artigo->titulo !!}</p>
                    <p class="card-text">Introdução: {!! $artigo->introducao !!}</p>
                    <p class="card-text">Autor: {!! $artigo->autor !!}</p>
                    <p class="card-text"> {!! $artigo->postado ? 'Postado' : 'Removido' !!}</p>
                    <form action="{{ route('admin.postarartigos', ['id' => $artigo->id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Postar</button>
                    </form>
                    <a href="{{ route('admin.editartigo', ['id' => $artigo->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Adicione estes metadados do Bootstrap no final da sua página -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
@endpush

@push('scripts')
<!-- Adicione este script do Bootstrap no final da sua página -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
@endpush
