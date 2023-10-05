@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <h1>Usuários</h1>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Função</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->funcao }}</td>
                    <td>
                        <form action="{{ route('admin.changeRole', $user->id) }}" method="POST">
                            @csrf
                            <select name="funcao">
                                <option value="leitor">Leitor</option>
                                <option value="escritor">Escritor</option>
                                <option value="editor">Editor</option>
                            </select>
                            <button type="submit">Alterar Função</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
