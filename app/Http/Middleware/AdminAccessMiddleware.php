<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAccessMiddleware
{
    public function handle($request, Closure $next)
    {
        // Verifique se o usuário está autenticado
        if (Auth::check()) {
            $user = Auth::user();

            // Verifique o email do usuário
            if (auth()->user()->funcao != 'admin' && auth()->user()->funcao != 'editor') {
                abort(403);
            }
            
        }
        return $next($request);
        // Redirecione ou retorne um erro caso o usuário não tenha acesso
      // somente para ir para artigos.index  return redirect()->route('artigos.index')->withErrors(['message' => 'Acesso não autorizado']);

    }
}
