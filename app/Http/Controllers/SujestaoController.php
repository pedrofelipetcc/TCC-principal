<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sujestao;


class SujestaoController extends Controller
{
    public function sujestao()
    {
        return view('sujestao.sujestao');
    }
    
    public function create()
    {
        return view('sujestao.create');


    }
    public function store(Request $request)
    {
        $sujestao = new sujestao();
        $sujestao->titulo = $request->titulo;
        $sujestao->introducao = $request->introducao;
        $sujestao->conteudo = $request->conteudo;
        $sujestao->imagem_url = $request->imagem_url;
        $sujestao->autor = $request->autor;
        $sujestao->emailautor = $request->emailautor;


    
        $sujestao->save();
        
        return redirect()->route('sujestao.create')->with('success', 'sujestao criado com sucesso!');
    }
}
