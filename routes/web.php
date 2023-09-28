<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SujestaoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrincipalController::class, 'index']) ->name('principal');

Route::get('/view/{id}', [PrincipalController::class, 'view'])->name('view');

Route::get('/gremio', [PrincipalController::class, 'gremio']) ->name('gremio');



Route::get('/sujestao',               [SujestaoController::class, 'sujestao']) ->name('sujestao.sujestao');
Route::get('/sujestao/create',        [SujestaoController::class, 'create']) ->name('sujestao.create');
Route::post('/sujestao/create',       [SujestaoController::class, 'store'])->name('sujestao.store');
Route::get('/sujestao/delete/{id}',   [SujestaoController::class, 'delete'])->name('sujestao.delete');


Route::get('/search', [PrincipalController::class, 'search'])
    ->name('search');



Auth::routes();
Route::get('/home',                  [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['admin.access', ]);


Route::get('/artigos',               [ArtigoController::class, 'index'])->name('artigos.index')->middleware('auth');

Route::get('/artigos/create',        [ArtigoController::class, 'create'])->name('artigos.create')->middleware('auth');
Route::post('/artigos/create',       [ArtigoController::class, 'store'])->name('artigos.store')->middleware('auth');

Route::get('/artigos/edit/{id}',     [ArtigoController::class, 'edit'])->name('artigos.edit')->middleware('auth');
Route::post('/artigos/update/{id}',  [ArtigoController::class, 'update'])->name('artigos.update')->middleware('auth');



/*Route::get('/admingeral',            [AdminController::class, 'showUsers','changeRole'])->name('adimin.geral');*/

Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware(['auth', 'admin.access']); // Adicione os middlewares necessários




  
    Route::get('/admin/sujestoes', [AdminController::class, 'sujestao'])
    ->name('sujestoesadm.sujestoes')
    ->middleware(['auth', ]); // Adicione os middlewares necessários

   
    Route::get('/vizualizar/{id}', [AdminController::class, 'tranformar'])
    ->name('sujestoesadm.vizualizar')
    ->middleware(['auth', ]); // Adicione os middlewares necessários

    
    Route::get('/transformar/{id}', [AdminController::class, 'transformarSujestao'])
    ->name('sujestoesadm.transformar')
    ->middleware(['auth',]); // Adicione os middlewares necessários

    Route::get('/sujestoes-postadas',               [PrincipalController::class, 'sujestaopostada']) ->name('sujestaoPostada');


    Route::post('/vizualizar/{id}',  [AdminController::class, 'postararsujestao'])
    ->name('artigos.update')
    ->middleware('auth');






    Route::get('/admin/artigos', [AdminController::class, 'artigos'])
    ->name('admin.artigos')
    ->middleware(['auth',]); // Adicione os middlewares necessários
    

    Route::post('/admin/artigos/deleteartigos/{id}', [AdminController::class, 'deleteartigos'])
    ->name('admin.deleteartigos')
    ->middleware(['auth', ]); // Adicione os middlewares necessários
    

    Route::get('/admin/editar-artigo/{id}', [AdminController::class, 'edit'])
    ->name('admin.editartigo')
    ->middleware(['auth',]);

    
    Route::post('/admin/atualizar/{id}', [AdminController::class, 'atualizar'])->name('admin.atualizar');







    Route::get('/admin/artigosRemovidos', [AdminController::class, 'artigosRemovidos'])
    ->name('admin.artigosRemovidos')
    ->middleware(['auth',]); // Adicione os middlewares necessários
    


    Route::post('/admin/artigos/postarartigos/{id}', [AdminController::class, 'postarartigos'])
    ->name('admin.postarartigos')
    ->middleware(['auth',]); // Adicione os middlewares necessários
    


  




    Route::get('/admin/showUsers', [AdminController::class, 'showUsers'])
    ->name('admin.showUsers')
    ->middleware('auth'); // Adicione os middlewares necessários

    Route::post('/admin/changeRole/{userId}', [AdminController::class, 'changeRole'])
    ->name('admin.changeRole')
    ->middleware('auth'); // Adicione os middlewares necessários



    Route::delete('/usuarios/{id}',  [AdminController::class, 'deleteuser'])
    ->name('admin.deletaruser')
    ->middleware(['auth', 'admin.access']);



   
   

    



