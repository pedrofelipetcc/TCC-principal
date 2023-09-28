
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mural Jornalistico</title>
    
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
header {
  background-color: #1d3557;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px; 
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-right: 20px;
}
.btn-round {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  background-color: #a8dadc;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  font-size: 24px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.2s ease-in-out;
}
/* Estilo do menu */
.menu {
  position: absolute;
  top: 80px;
  right: 20px;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: none;
  transition: all 0.2s ease-in-out;
  z-index: 1;
}

/* Estilo das opções do menu */
.menu-item {
  padding: 10px;
  cursor: pointer;
  font-weight: bold;
  color: #333;
  font-size: 16px;
  transition: all 0.2s ease-in-out;
}

.menu-item:hover {
  background-color: #1d3557;
  color: #fff;
}
.suggestion-container {
        margin: 50px auto;
        max-width: 800px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
      }
      
      .create-suggestion-button {
        margin-top: 20px;
      }
</style>
  </head>
  <body>
    <header>
      <h1>Mural Jornalistico</h1>
      <nav>
        <ul>
          

          
    <button class="btn-round" onclick="toggleMenu()">☰</button>
    
    <div class="menu" id="menu">
    <div class="menu-item" onclick="window.location.href = '{{ route('principal') }}';">Home</div>
		<div class="menu-item" onclick="window.location.href = '{{ route('gremio') }}';">Gremio Estudantil</div>
		<div class="menu-item" onclick="window.location.href = '{{ route('login') }}';">Log in</div>
    
		
	</div>





         
  
          
        </ul>
      </nav>
    </header>

    <main>
      <div class="suggestion-container">
        <h2>Envie uma Sugestão de Artigo</h2>
        <p>Contribua com ideias para novos artigos a serem avaliados e possivelmente publicados.</p>
        <a href="{{ route('sujestao.create') }}" class="btn btn-primary create-suggestion-button">Criar Sugestão</a>
      </div>
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

  