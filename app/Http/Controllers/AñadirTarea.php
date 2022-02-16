<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\DB;

class AñadirTarea extends Controller
{   
    function mostrar(){
        $tareasDB = DB::table('tareas')->get();
        return view('/ensenar',['tareas' => $tareasDB]);
    }

    function crear(Request $request){
        if(!empty($request->nombreTarea) && !empty($request->texto)){
                $request->validate([
                'nombreTarea' => ['required'],
                'texto' => ['required'],
            ]);

            Tarea::create([
                'nombreTarea' => $request -> post('nombreTarea'),
                'campoTexto' => $request -> post('texto'),
            ]);
            return view('crear', ['error' => ""]);
        }
        else{
            return view('crear', ['error' => "Algun campo no se ha rellenado, vuelva a intentarlo"]);
        }
    }
    
    function borrar($id){
        Tarea::destroy($id);
        return redirect()->back();
    }
    function buscar(Request $request){
        $nombreTarea = $request->nombreTarea;
        $tareas = Tarea::where('nombreTarea', $nombreTarea)->get();
        return view('busqueda', ['tareas' => $tareas]);
    }
}
