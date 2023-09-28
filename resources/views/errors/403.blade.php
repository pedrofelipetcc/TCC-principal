@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbidden - Mural Jornalístico</title>
    <!-- Adicione os links CSS do Bootstrap 5 aqui -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f0f8ff;">
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Erro 403 - Acesso Negado</h4>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Desculpe, você não tem permissão para acessar esta página, pois não é um Administrador Geral.</p>
                        <a href="javascript:history.back()" class="btn btn-primary">Voltar à Página Anterior</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <!-- Adicione os scripts do Bootstrap 5 aqui (jQuery e Popper.js) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
