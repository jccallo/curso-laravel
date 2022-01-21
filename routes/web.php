<?php

use Illuminate\Support\Facades\Route;

// importamos el controlador HomeController
use App\Http\Controllers\HomeController;

// importamos el controlador CursoController
use App\Http\Controllers\CursoController;

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

// ruta raiz que usa el controlador HomeController
Route::get('/', HomeController::class);

// rutas para cursos que usa el controlador CursoController
Route::get("cursos", [CursoController::class, "index"]);
Route::get("cursos/create", [CursoController::class, "create"]);
Route::get("cursos/{curso}", [CursoController::class, "show"]);

// laravel 7
// Route::get('/', "HomeController"); 
// Route::get("cursos", "CursoController@index");



