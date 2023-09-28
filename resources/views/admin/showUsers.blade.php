@extends('layouts.app')

@section('content')
<div class="container mt-5">
<li>
                <a href="{{ route('admin.index') }}">
                    <button class="btn btn-sm btn-secondary">Voltar</button>
                </a>
            </li>

    <h1>Lista de Usuários</h1>
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
    <div class="row">
   
        <div class="col-md-8">

            @foreach ($users as $user)
            @if ($user->email !== 'admin@gmail.com')

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Nome: {{ $user->name }}</h5>
                            <p class="card-text">Email: {{ $user->email }}</p>
                            <p class="card-text">Função: {{ $user->funcao }}</p>

                            <form action="{{ route('admin.changeRole', ['userId' => $user->id]) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="funcao" class="form-label">Mudar Função:</label>
        <select name="funcao" id="funcao" class="form-select">
            <option value="leitor">Leitor</option>
            <option value="escritor">Escritor</option>
            <option value="editor">Editor</option>
            <option value="adm">Administrador Geral</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
                        </div>
                    </div>
                    @endif

            @endforeach
        </div>
    </div>
</div>
@endsection
