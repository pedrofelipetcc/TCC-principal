
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

.form-floating {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-floating label {
            position: absolute;
            pointer-events: none;
            left: 1rem;
            top: 1rem;
            transition: 0.2s;
        }

        .form-control:focus + label {
            top: -0.25rem;
            font-size: 0.85rem;
            color: #6c757d;
        }

         /* Estilo para a div que limita o tamanho do formulário */
         .form-container {
            max-width: 70%;
            margin: 0 auto; /* Centraliza a div na tela */
        }

        /* Estilo para o comportamento de placeholder flutuante */
        .form-floating {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-floating label {
            position: absolute;
            pointer-events: none;
            left: 1rem;
            top: 1rem;
            transition: 0.2s;
        }

        .form-control {
            resize: vertical; /* Permite que a caixa de texto expanda verticalmente */
        }

        .form-control:focus + label {
            top: -0.25rem;
            font-size: 0.85rem;
            color: #6c757d;
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
      
    <div class="form-container">
    <form action="{{ route('sujestao.store') }}" class="mt-3" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="" >
                    <label for="floatingInput">Título do artigo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="introducao" id="introducao"  rows="6" placeholder="" >
                    <label for="floatingInput">Introdução do artigo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="conteudo" id="conteudo"  rows="10" placeholder="" >
                    <label for="floatingInput">Conteúdo do artigo</label>
                </div>
               
               
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="imagem_url" id="imagem_url"  placeholder="" >
                    <label for="floatingInput">URL da imagem</label>
                </div>
               
               
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="autor" id="autor"  placeholder="" >
                    <label for="floatingInput">Nome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="emailautor" id="emailautor"  placeholder="" >
                    <label for="floatingInput">Email</label>
                </div>

   
    
   

    
                <!-- Rest of the form elements -->
                <input type="submit" class="btn btn-primary" value="Enviar" />
            </form>
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

  