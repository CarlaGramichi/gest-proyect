<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_proyecto';

    public function estado(){
        return $this->belongsTo(Estado::class,'id_estado','id_estado');
    }
    public function tareas(){
        return $this->hasMany(ProyectoTarea::class,'id_proyecto','id_proyecto');
    }
}
