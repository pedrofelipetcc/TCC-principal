@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Sugestões</h1>
        <a href="{{ route('admin.index') }}" class="btn btn-sm btn-secondary mb-3">Voltar</a>

        <section id="about" class="p-3">
            <div class="table-responsive">
                @foreach ($sujestoes as $sujestao)
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="card-text">Título: {{ $sujestao->titulo }}</p>
                        <p class="card-text">Introdução: {{ $sujestao->introducao }}</p>
                        <p class="card-text">Conteúdo: {{ $sujestao->conteudo }}</p>
                        <p class="card-text">Autor: {{ $sujestao->autor }}</p>
                        <p class="card-text">Email do Autor: {{ $sujestao->emailautor }}</p>
                        <a href="{{ route('sujestoesadm.vizualizar', ['id' => $sujestao->id]) }}" class="btn btn-primary btn-sm">Transformar em Artigo</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
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