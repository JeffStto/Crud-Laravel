<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController; //llamar controlador


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

Route::get('/', function () {
    return view('prueba');
});

//llamar un metodo del controladopr
//get por que sera visible en la url
// estructura (enrutado, clase , metodo)

//revisar web.php antes de enrutar ya que es el primer filtro
Route::get('/Categorias', [CategoriaController::class, 'index']);
Route::get('/Categorias/crear', [CategoriaController::class, 'create']);
// ---------------------------------------------------------------- continue
Route::post('/Categorias/guardar', [CategoriaController::class, 'store']);
// get por que sale en url
Route::get('/Categorias/editar/{id}', [CategoriaController::class, 'edit']);
Route::put('/Categorias/actualizar/{id}', [CategoriaController::class, 'update']);
Route::delete('/Categorias/eliminar/{categorias}', [CategoriaController::class, 'destroy']);
//