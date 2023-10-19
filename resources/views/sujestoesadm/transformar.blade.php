@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        
        /* Estilos CSS */
       
    </style>
    
</head>
<body>
<a href="{{ route('admin.index') }}">
                        <button class="btn btn-sm btn-secondary mb-3">Voltar</button>
                    </a>
<form method="post">
@csrf
<div class="container">
    <div class="atributo">
        <strong>Título:</strong>
        <div>{{ $sujestoes->titulo }}</div>
    </div>
    <div class="atributo">
        <strong>Introdução:</strong>
        <div>{{ $sujestoes->introducao }}</div>
    </div>
    <div class="atributo">
        <strong>Conteúdo:</strong>
        <div>{{ $sujestoes->conteudo }}</div>
    </div>
    <div class="atributo">
        <strong>Autor:</strong>
        <div>{{ $sujestoes->autor }}</div>
    </div>
    <div class="atributo">
        <strong>Email do Autor:</strong>
        <div>{{ $sujestoes->emailautor }}</div>
    </div>
  
</div>




    </form>
    <button type="submit" class="btn btn-danger" formaction="{{ route('sujestao.postar', ['id' => $sujestoes->id]) }}">Postar</button>

    
@endsection
</body>
</html>
