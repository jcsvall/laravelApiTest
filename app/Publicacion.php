<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $fillable = ['post','imagen'];

    public function comentarios(){
        return $this->hasMany('App\Comentario', 'publicacions_id', 'id');
    }
}
