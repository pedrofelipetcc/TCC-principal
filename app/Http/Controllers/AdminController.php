<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artigo;
use App\Models\Sujestao;


class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.index');
    }

    public function sujestao()
    {
        $sujestoes = Sujestao::all(); // Busca todos os registros da tabela
    
        return view('sujestoesadm.sujestoes', compact('sujestoes'));
    }
    
    //fiz a funcao:
    public function tranformar($id)
{
    $sujestoes = Sujestao::findOrFail($id); // Certifique-se de que o modelo seja "Sujestao" com "S" maiúsculo

    return view('sujestoesadm.transformar', compact('sujestoes')); // Use 'sujestao' em vez de 'sugestoes'
}


    public function artigos()
    {
        $artigos = Artigo::where('postado', 1)->get();
        return view('admin.artigos', compact('artigos'));
    }

    public function deleteartigos($id)
{
    $artigo = Artigo::find($id);

    if ($artigo) {
        $artigo->update(['postado' => 0]);
        return redirect()->back()->with('success', 'Artigo marcado como não postado com sucesso.');
    }

    return redirect()->back()->with('error', 'Artigo não encontrado.');
}



public function artigosRemovidos()
{
    $artigos = Artigo::where('postado', 0)->get();
    return view('admin.artigosRemovidos', compact('artigos'));
}

public function postarartigos($id)
{
    $artigo = Artigo::find($id);

    if ($artigo) {
        $artigo->update(['postado' => 1]);
        return redirect()->back()->with('success', 'Artigo marcado como  postado com sucesso.');
    }

    return redirect()->back()->with('error', 'Artigo não encontrado.');
}


public function showUsers()
{
    $users = User::all();
    return view('admin.showUsers', compact('users'));
}
public function deleteuser($id)
{
    // Encontre o usuário pelo ID
    $user = User::findOrFail($id);

    // Exclua o usuário
    $user->delete();

    // Redirecione para uma rota após a exclusão (por exemplo, a página de lista de usuários)
    return redirect()->route('admin.deletaruser')->with('success', 'Usuário excluído com sucesso.');
}


public function changeRole(Request $request, $userId)
{
    $user = User::findOrFail($userId);
    $newRole = $request->input('funcao');

    // Valide a função, se necessário

    $user->funcao = $newRole;
    $user->save();

    return redirect()->back()->with('success', 'Função do usuário atualizada com sucesso.');
}


public function edit($id)
{
    $artigo = Artigo::find($id);

    if (!$artigo) {
        return redirect()->route('admin.index')->with('error', 'Artigo não encontrado.');
    }

    return view('admin.editartigo', compact('artigo'));
}




public function postararsujestao($id)
{
    $artigo = Artigo::find($id);

    if ($artigo) {
        $artigo->update(['postado' => 1]);
        return redirect()->back()->with('success', 'Artigo marcado como  postado com sucesso.');
    }

    return redirect()->back()->with('error', 'Artigo não encontrado.');
}


public function atualizar(Request $request, $id)
{
    $artigo = Artigo::find($id);

    if (!$artigo) {
        return redirect()->route('admin.index')->with('error', 'Artigo não encontrado.');
    }

    $artigo->titulo = $request->input('titulo');
    $artigo->conteudo = $request->input('conteudo');
    $artigo->save();

    return redirect()->route('admin.index')->with('success', 'Artigo atualizado com sucesso.');
}





















}


