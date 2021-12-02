<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_tarea';


    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado');
    }

    public function tareaInfo()
    {
        return $this->belongsTo(ProyectoTarea::class, 'id_tarea', 'id_tarea');
    }

    public function responsables()
    {
        return $this->hasMany(TareaResponsable::class, 'id_tarea', 'id_tarea');
    }



}
