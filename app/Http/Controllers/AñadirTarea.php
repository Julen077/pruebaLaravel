<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;


class AñadirTarea extends Controller
{
    function crear(Request $request){
        Tareas::create([
            'nombreTarea' => $request -> get('nombreTarea'),
        ]);
        return redirect("/proyecto");
    }
}
