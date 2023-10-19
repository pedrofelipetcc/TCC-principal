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
   
    <!-- Core theme CSS (includes Bootstrap)-->
   
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body id="page-top">
    <!-- Navigation-->
   
    <!-- Header-->
    <header>
  
    </header>

    <section id="about" class="p-2 m-2">
        <div class="container">
            <div class="row">
               
                <div class="col">
                    <h2>Artigos Mais Visualizados</h2>
                    <ul class="list-group">
                        @php
                            // Ordenar os artigos por visualizações e limitar a 4
                            $artigos = $artigos->sortByDesc('visualizacao')->take(4);
                        @endphp
                        @foreach ($artigos as $artigo)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $artigo->titulo }}</span>
                                <span class="ml-auto">
                                    <a href="{{ route('view', ['id' => $artigo->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                                </span>
                                <span class="badge bg-primary rounded-pill">{{ $artigo->visualizacao }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <link rel="stylesheet" href="public/assets/js/artigo.js">        
</body>
</html>

@endsection
