<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['comentario','publicacions_id'];

    public function publicacions(){
        return $this->belongsTo('App\Publicacion', 'publicacions_id', 'id');
    }
}
