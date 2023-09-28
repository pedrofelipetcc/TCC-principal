
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mural Jornalistico</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>@media (max-width: 967px) {
  .imagem {
    text-align: center; /* Alinhe o conteúdo centralmente */
  }

  .imagem img {
    width: 100%; /* Define a largura da imagem como 100% em dispositivos móveis */
    min-width: 300px; /* Define a largura mínima da imagem como 300 pixels */
    height: auto; /* Mantém a proporção da imagem */
    max-height: auto; /* Define a altura máxima da imagem como automática */
    margin: 0 auto; /* Centralize horizontalmente */
    display: block; /* Isso remove quaisquer espaços em branco adicionais abaixo da imagem */
  }
}</style>
  </head>
  <body>
    <header>
      <h1>Mural Jornalistico</h1>
      <nav>        
      <button class="btn-round" onclick="toggleMenu()">☰</button>
      <div class="menu" id="menu">
        <div class="menu-item" onclick="window.location.href = '{{ route('principal') }}';">Página Principal</div>
        <div class="menu-item" onclick="window.location.href = '{{ route('sujestao.sujestao') }}';">Deixe sua Sugestão</div>
      </div>
    </nav>
    </header>





    <main role="main" class="container">
    @foreach ($sujestoes as $sujestao)        
    <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-4">
                   
                        <img src="{{ $sujestao->imagem_url }}" alt="Imagem da sujestao" class="img-fluid">
                    
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $sujestao->titulo }}</h3>
                        <p class="card-text">{{ $sujestao->introducao }}</p>
                        <p class="card-text"> {{ $sujestao->conteudo }}  </p>
                      
                        <p class="card-text"> {{ $sujestao->autor }}  </p>

                       
                    </div>
                </div> 
            </div>
        </div>
    @endforeach
</main>


    
    <script>
      // Seleciona o botão e o menu
		var btnRound = document.querySelector('.btn-round');
		var menu = document.querySelector('.menu');
		
		// Adiciona o evento de clique ao botão
		function toggleMenu() {
			// Verifica se o menu está visível
			if (menu.style.display == 'block') {
				// Esconde o menu
				menu.style.display = 'none';
				btnRound.innerHTML = "☰";
			} else {
				// Mostra o menu
				menu.style.display = 'block';
				btnRound.innerHTML = "&times;";
			}
		}
    </script>
    

</body>

  