<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EditorAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Verifique se o usuário está autenticado
        if (Auth::check()) {
            $user = Auth::user();

            // Verifique o email do usuário
            if ($user->funcao === 'editor') {
                return $next($request);
            }
           
        }
        

        // Redirecione ou retorne um erro caso o usuário não tenha acesso
      // somente para ir para artigos.index  return redirect()->route('artigos.index')->withErrors(['message' => 'Acesso não autorizado']);

      return redirect()->route('principal')->withErrors(['message' => 'Acesso não autorizado']);
    }
}
