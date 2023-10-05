<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Mural Jornalístico teste</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>/* Adicione essas regras ao seu arquivo CSS */

/* Centralize o conteúdo */
/* Estilo para o main (centralize o conteúdo) */
main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    /* Estilo para a imagem em dispositivos móveis */
    @media (max-width: 1967px) {
      .imagem img {
        width: 100%; /* Define a largura da imagem como 100% em dispositivos móveis */
        min-width: 300px; /* Define a largura máxima da imagem como 600 pixels */
        height: auto; /* Mantém a proporção da imagem */
      }
    }

/* Estilo para o card do artigo */
.card {
    max-width: 1000px; /* Largura máxima do card */
    margin: 0 auto; /* Centralize horizontalmente */
    padding: 30px; /* Espaçamento interno */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Sombra suave */
    text-align: center; /* Centralize o texto no card */
    background-color: #fff; /* Cor de fundo do card */
}

/* Estilo para a imagem do artigo */


/* Estilos para o título e introdução do artigo */
.titulo {
    font-size: 36px; /* Tamanho do título aumentado */
    font-weight: bold;
    margin-bottom: 20px;
}

.introducao {
    font-size: 24px; /* Tamanho da introdução aumentado */
    margin-bottom: 30px;
}

/* Estilo para o conteúdo do artigo */
.conteudo {
    font-size: 20px; /* Tamanho do conteúdo aumentado */
    line-height: 1.6;
}
</style>
</head>
<header>
<body>
  
  <h1>Mural Jornalistico</h1>

  <nav>
    <!-- Adicione o botão "Voltar" em um li para alinhar corretamente em dispositivos móveis -->
    <ul class="list-unstyled">
      <li>
        <a href="{{ route('principal') }}">
          <button class="btn btn-sm btn-secondary">Voltar</button>
        </a>
      </li>
    </ul>
  </nav>

</header>
<main role="main" class="container">
  <div class="card">
    <div class="row">
      <div class="col-md-6"><div class="titulo">{{ $artigo->titulo }}</div>
        <div class="imagem">
          <img src="{{ $artigo->imagem_url }}" alt="Imagem do artigo" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          
        
        <div class="introducao">{!! $artigo->introducao !!}</div>
<div class="conteudo">{!! $artigo->conteudo !!}</div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
  // Seu código JavaScript aqui
</script>

</body>
</html>