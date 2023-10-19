<link href="{{ asset('css/style.css') }}" rel="stylesheet" />

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