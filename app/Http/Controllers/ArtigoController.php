<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\User;

use Illuminate\Http\Request;

class ArtigoController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()

    {
        
        $artigos = Artigo::where('postado', 1)->get();
        return view('artigos.index', compact('artigos'));
    }


    public function create(Request $request)
    {
        return view('artigos.create');
    }

    public function store(Request $request)
    {

        $artigos = new Artigo;
        $artigos->titulo = $request->titulo;
        $artigos->introducao = $request->introducao;
        $artigos->conteudo = $request->conteudo;
        $artigos->imagem_url = $request->imagem_url;
        $artigos->autor_id = auth()->user()->id;
        $artigos->editor_id = auth()->user()->id;
        $artigos->revisado_por_id = auth()->user()->id;
        $artigos->save();



        return redirect('/artigos')->with('success', 'artigo criado com sucesso!');
    }

    


    
    public function edit(Request $request, $id) {
       
    }

    public function update(Request $request, $id) {
    }

    public function delete(Request $request, $id) {
      
       
    }
    
}
