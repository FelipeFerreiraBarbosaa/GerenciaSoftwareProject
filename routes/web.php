<?php

use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['web'])->group(function () {
    Route::get('/', [ProjetoController::class, 'index'])->name('projeto');

    Route::get('login', [AuthController::class, 'index'])->name('login');

    Route::post('login', [AuthController::class, 'auth'])->name('auth');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('pessoa', [PessoaController::class, 'index'])->name('pessoa');
    Route::get('pessoa/edit/{id}', [PessoaController::class, 'edit'])->name('pessoa.edit');
    Route::post('pessoa/edit/{id}', [PessoaController::class, 'update'])->name('pessoa.update');
    Route::get('pessoa/create', [PessoaController::class, 'create'])->name('pessoa.create');
    Route::post('pessoa/create', [PessoaController::class, 'store'])->name('pessoa.store');
    Route::get('pessoa/destroy/{id}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');

    Route::get('veiculos', [VeiculoController::class, 'index'])->name('veiculo');
    Route::get('veiculos/edit/{id}', [VeiculoController::class, 'edit'])->name('veiculo.edit');
    Route::post('veiculos/edit/{id}', [VeiculoController::class, 'update'])->name('veiculo.update');
    Route::get('veiculos/create', [VeiculoController::class, 'create'])->name('veiculo.create');
    Route::post('veiculos/create', [VeiculoController::class, 'store'])->name('veiculo.store');
    Route::get('veiculos/destroy/{id}', [VeiculoController::class, 'destroy'])->name('veiculo.destroy');

    Route::get('usuario', [UsuarioController::class, 'index'])->name('usuario');
    Route::get('usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::post('usuario/edit/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
    Route::get('usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
    Route::post('usuario/create', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('usuario/destroy/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

    
});