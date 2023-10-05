@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Sugestões</h1>
        <a href="{{ route('admin.index') }}" class="btn btn-sm btn-secondary mb-3">Voltar</a>

        <section id="about" class="p-3">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Introdução</th>
                            <th scope="col">Conteúdo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Email do Autor</th>
                            <th scope="col">Ação</th>
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
                                <td>
                                    <a href="{{ route('sujestoesadm.vizualizar', ['id' => $sujestao->id]) }}" class="btn btn-primary btn-sm">Transformar em Artigo</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
