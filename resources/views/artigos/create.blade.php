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
        <div class="container"> <!-- Add the container here -->
            <a href="{{ route('artigos.index') }}">
                <button class="btn btn-sm btn-secondary">Voltar</button>
            </a>
           
           
            <form action="{{ route('artigos.store') }}" class="mt-3" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <label for="floatingInput">Título do artigo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="" >
                </div>
                <div class="form-floating mb-3">
    <label for="floatingInput">Introdução</label>
        <textarea class="form-control" name="introducao" id="introducao" rows="6" placeholder=""></textarea>
       
    </div>

    <div class="form-floating mb-3">
    <label for="floatingInput">Conteúdo</label>
        <textarea class="form-control" name="conteudo" id="conteudo" rows="10" placeholder=""></textarea>
        
    </div>
    <div class="form-floating mb-3">                 
           <label for="floatingInput">URL da imagem</label>

        <input type="text" class="form-control" name="imagem_url" id="imagem_url" placeholder="" >
    </div>

    
                <!-- Rest of the form elements -->
                <input type="submit" class="btn btn-primary" value="Salvar" />
            </form>
        </div> <!-- Close the container here -->
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <link  rel="stylesheet" href="public/assets/js/artigo.js">        
</body>
</html>
@endsection
