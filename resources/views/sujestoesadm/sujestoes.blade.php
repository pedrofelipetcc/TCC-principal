
@section('content')

<!DOCTYPE html>
<html>
<head><head>
  <title>Mural Jornalístico teste</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
    <title>Sugestões</title>
</head>
<body>
    <h1>Sugestões</h1>
    <section id="about" class="p-2 m-2">
    <div class="table-responsive">
    <table class="table">
    <a href="{{ route('admin.index') }}">
                    <button class="btn btn-sm btn-secondary">Voltar </button>
                </a>
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Introdução</th>
                <th scope="col">Conteúdo</th>
                <th scope="col">Autor</th>
                <th scope="col">Email do Autor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sujestoes as $sujestao)
            <tr>
                <td>{{ $sujestao->titulo }}</td>
              
                
               <td>{{ $sujestao->introducao }}</td>
                <td>{{ $sujestao->conteudo }}</td>
                <td>{{ $sujestao->autor }}</td>
                <td>{{ $sujestao->emailautor }}</td>
                <td><a href="{{ route('sujestoesadm.vizualizar', ['id' => $sujestao->id]) }}">Transformar em Artigo</a></td>
            </tr>
            @endforeach
        </tbody>
        </div>

    </section>
</body>
</html>









