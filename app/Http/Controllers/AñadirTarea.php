<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use Illuminate\Support\Facades\DB;

class AñadirTarea extends Controller
{
    function crear(Request $request){
        Tareas::create([
            'nombreTarea' => $request -> get('nombreTarea'),
        ]);
        return redirect("/proyecto");
    }
    
    function mostrar(){
        $tareasDB = DB::table('tareas')->get();
        return view('/proyecto',['tareas' => $tareasDB]);
    }
    function borrar($id){
        DB::table('tareas')->where('id', '=', $id)->delete();
        return redirect('/proyecto');
    }
    
}
