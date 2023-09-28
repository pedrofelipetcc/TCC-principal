<?php

namespace App\Http\Controllers;
use App\Models\Artigo;
use App\Models\User;
use App\Models\Sujestao;


use Illuminate\Http\Request;



class PrincipalController extends Controller
{
    public function index()
    {
        $artigos = Artigo::where('postado', 1)
                       ->orderBy('created_at', 'desc')
                       ->get();
    
        return view('principal', compact('artigos'));
    }

    public function view($id)
    {

        $artigo = Artigo::findOrFail($id); // Certifique-se de importar a classe Artigo no topo do seu controlador.
        $artigo->visualizacao++;
        $artigo->save();
        return view('view', compact('artigo'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $artigos = Artigo::where('titulo', 'like', '%'.$query.'%')
                          ->orWhere('introducao', 'like', '%'.$query.'%')
                          ->orWhere('conteudo', 'like', '%'.$query.'%')
                          ->get();
        
        return view('search', compact('artigos'));
    }
 




    public function gremio()
    {
        $artigos = Artigo::where('postado', 1)
                          ->where('conteudo', 'like', '%gremio%') // Adicione essa condição
                          ->get();
    
        return view('gremio', compact('artigos'));
    }

    public function sujestao()
    {
        return view('sujestao');
    }
    
   

    public function sujestaopostada()
    {
        // Consulta os registros da tabela Sujestao
        $sujestoes = Sujestao::where('postado', 1)
        ->orderBy('created_at', 'desc')
        ->get();

        // Retorna a view 'sujestaoPostada' com os resultados
        return view('sujestaoPostada', compact('sujestoes'));
    }





}
