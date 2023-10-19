@extends('layouts.app')


@section('content')



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Artigo</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/ztdmo88ncqnzslo9n8xk9o1a8h6xei4kczejvdmnt74yri8d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <h1>Editar Artigo</h1>

    <li>
                <a href="{{ route('admin.index') }}">
                    <button class="btn btn-sm btn-secondary">Voltar</button>
                </a>
            </li>
    <form action="{{ route('admin.atualizar', ['id' => $artigo->id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $artigo->titulo }}">
        </div>
       
       
        <div class="form-group">
            <label for="conteudo">Introdução:</label>
            <textarea class="form-control" id="introducao" name="introducao">{{ $artigo->introducao }}</textarea>
        </div>


        <div class="form-group">
            <label for="conteudo">Conteúdo:</label>
            <textarea class="form-control" id="conteudo" name="conteudo">{{ $artigo->conteudo }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

    <script>
        tinymce.init({
            selector: 'textarea', // Seletor para campos de texto
            plugins: 'autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            height: 300, // Altura do editor
        });
    </script>
</body>
</html>
@endsection