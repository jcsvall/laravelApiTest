<?php

namespace App\Http\Controllers;

use App\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function publicaciones(){
        $publicaciones = Publicacion::all();
        $array = array();
        foreach ($publicaciones as $publicacion) {
            $publicacion->comentarios;//Para hacerlo Eager y no sea Lazy
        }
        $publicacionesCompleta = array("publicaciones"=>$publicaciones);
        return $publicacionesCompleta;
    }

    public function show(Publicacion $publicacion){
        return $publicacion;
    }

    public function crear(Request $request){
        $publicacion = Publicacion::create($request->all());
        return response()->json($publicacion,201);
    }

    public function update(Request $request,Publicacion $publicacion){
        $publicacion->update($request->all());
        return response()->json($publicacion,200);
    }

    public function delete(Publicacion $publicacion){
        $publicacion->delete();
        return response()->json(null,204);
    }
}
