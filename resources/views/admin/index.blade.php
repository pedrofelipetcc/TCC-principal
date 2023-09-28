@extends('layouts.app')

@section('content')

<link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<div class="d-flex">
    <nav id="sidebar" class="bg-dark sidebar">
        <!-- Botão Voltar no menu lateral -->
        <ul>
            <li>
              
            </li>
            <li>
                <a href="{{ route('admin.showUsers') }}">
                    <button class="btn btn-sm btn-secondary">Usuarios</button>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.artigosRemovidos') }}">
                    <button class="btn btn-sm btn-secondary">Postar Artigos</button>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.artigos') }}">
                    <button class="btn btn-sm btn-secondary">Artigos</button>
                </a>
            </li>
            <li>
                <a href="{{ route('sujestoesadm.sujestoes') }}">
                    <button class="btn btn-sm btn-secondary">Sujestões</button>
                </a>
            </li>
        
            
            
            

            <!-- Adicione mais opções de menu aqui -->
        </ul>
    </nav>

    <div id="content">
        <!-- Conteúdo da página -->
    </div>
</div>

<style>
    .d-flex {
        display: flex;
    }

    #sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        background-color: #333;
        padding-top: 20px;
        z-index: 1; /* Certifica-se de que o menu esteja por baixo do conteúdo */
    }

    #content {
        margin-left: 250px;
        padding: 20px;
        z-index: 0; /* Garante que o conteúdo fique por cima do menu */
    }
</style>
@endsection
