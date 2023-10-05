


 
  <head>
  <title>Mural Jornalístico teste</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<header>
  <h1>Mural Jornalistico</h1>

  <li>
                <a href="{{ route('principal') }}">
                    <button class="btn btn-sm btn-secondary">Voltar</button>
                </a>
            </li>

</header>
<h2>Resultados da Pesquisa</h2>
  @if ($artigos->count() > 0)
    @foreach ($artigos as $artigo)
      
 


    <div class="card">
                    <div class="row">
                    <div class="imagem">
        <img src="{{ $artigo->imagem_url }}" alt="Imagem do artigo">
      </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <div class="titulo">{{ $artigo->titulo }}</div>
                            </a>
        <div class="introducao">{!! $artigo->introducao !!}</div>          
                        </div>
                        </div>
                    </div>
                </div>
  
  
  
       

    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal{{ $artigo->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $artigo->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal{{ $artigo->id }}Label">{{ $artigo->titulo }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{ $artigo->imagem_url }}" alt="Imagem do artigo" style="max-width: 100%;">
          <div class="introducao">{{ $artigo->introducao }}</div>
          <div class="conteudo">{{ $artigo->conteudo }}</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
    @endforeach
  @else
    <p>Nenhum resultado encontrado.</p>
  @endif
  