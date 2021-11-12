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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/proyecto', function () {
    return view('proyecto');
});
Route::post('/proyecto/nombreTarea', [AñadirTarea::class, 'crear']);

Route::get('/proyecto', [AñadirTarea::class,'mostrar']);

Route::delete('/proyecto/{id}', [AñadirTarea::class,'borrar']);