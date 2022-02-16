<?php

use App\Http\Controllers\AñadirTarea;
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

Route::get('/', function(){
    return view("tareas");
});

Route::get('task/ensenar',[AñadirTarea::class,'mostrar']);

Route::get('task/crear', function(){
    return view("crear",['error' => ""]);
});

Route::post('task/crear', [AñadirTarea::class, 'crear']);

Route::delete('task/eliminar/{id}', [AñadirTarea::class,'borrar']);

Route::get('task/buscar',function(){
    return view("busqueda", ['tareas' => []]);
});
Route::post('task/buscar',[AñadirTarea::class,'buscar']);