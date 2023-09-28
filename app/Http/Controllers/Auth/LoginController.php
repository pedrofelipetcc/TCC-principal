<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->funcao === 'admin') {
            return redirect()->route('admin.index');
        }
        if ($user->funcao === 'editor') {
            return redirect()->route('admin.index');
        }
        if ($user->funcao === 'escritor') {
            return redirect()->route('artigos.index');
        }
        if ($user->funcao === 'leitor') {
            return redirect()->route('principal');
        }   
        return redirect()->route('principal')->withErrors(['message' => 'Acesso não autorizado']);
    }
}
