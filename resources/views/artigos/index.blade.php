@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Artigos</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body id="page-top">
    <section id="about" class="p-2 m-2">
        <div class="container">
            <div class="mb-3">
                <a href="{{ route('artigos.create') }}">
                    <button class="btn btn-sm btn-secondary">Novo artigo</button>
                </a>
                @auth
                    @if(Auth::user()->funcao === 'admin' || Auth::user()->funcao === 'editor')
                        <a href="{{ route('admin.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
                    @else
                        <button class="btn btn-sm btn-secondary" onclick="window.history.back()">Voltar</button>
                    @endif
                @endauth
            </div>

            <div class="row">
                @foreach ($artigos as $artigo)
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{!! $artigo->titulo !!}</h5>
                                <p class="card-text">{!! $artigo->introducao !!}</p>
                                <p class="card-text">{!! $artigo->conteudo !!}</p>
                                <img src="{{ $artigo->imagem_url }}" alt="Imagem do Artigo" class="card-img-top" style="height: 200px; object-fit: cover;">
                                <!-- Coloque aqui os botões de ação (editar, excluir, etc.) -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
   
    <link  rel="stylesheet" href="public/assets/js/artigo.js">        
</body>
</html>
@endsection
