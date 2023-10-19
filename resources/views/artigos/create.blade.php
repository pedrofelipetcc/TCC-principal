@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
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

<body id="page-top">
<section id="about" class="p-2 m-2">
        <div class="container">
            <!-- O conteúdo antes do formulário permanece o mesmo -->

            <!-- Adicionando o botão no lugar da descrição em uma caixa -->
            <div class="card p-3 mb-3">
                <a href="https://www.languagetool.org/" target="_blank" class="btn btn-secondary btn-sm float-end">      Melhore sua escrita com LanguageTool
</a>
            </div>

            <!-- O restante do formulário permanece o mesmo -->
        </div>
    </section>
    <!-- Navigation-->
    <!-- Header-->
    <header>
    </header>
    <section id="about" class="p-2 m-2">
        <div class="container">
            <a href="{{ route('artigos.index') }}">
                <button class="btn btn-sm btn-secondary">Voltar</button>
            </a>
           
            <form action="{{ route('artigos.store') }}" class="mt-3" method="POST">
                @csrf
               
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="titulo" id="titulo"  placeholder="" >
                    <label for="floatingInput">Título do artigo</label>
                </div>
               
                <label for="floatingInput">Introdução</label>
                <div class="form-floating mb-3">
                   
                    <textarea class="form-control" name="introducao" id="introducao" rows="6" placeholder=""></textarea>
                </div>
               
               
                
               
              
                <label for="floatingInput">Conteúdo</label>
                <div class="form-floating mb-3">
                   
                    <textarea class="form-control" name="conteudo" id="conteudo" rows="10" placeholder=""></textarea>
                </div>


                <div class="form-floating mb-3">                 
                    <label for="floatingInput">URL da imagem</label>
                    <input type="text" class="form-control" name="imagem_url" id="imagem_url" placeholder="">
                </div>

                <!-- Rest of the form elements -->
                <input type="submit" class="btn btn-primary" value="Salvar" />
            </form>
        </div>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- Include TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/ztdmo88ncqnzslo9n8xk9o1a8h6xei4kczejvdmnt74yri8d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Initialize TinyMCE -->
    <script>
        tinymce.init({
            selector: 'textarea', // Seletor para campos de texto
            plugins: 'autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            height: 300, // Altura do editor
        });
    </script>
</body>
</html>
@endsection
