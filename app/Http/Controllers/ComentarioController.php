<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function crear(Request $request){
        $comentario = Comentario::create($request->all());
        return response()->json($comentario,201);
    }
}
