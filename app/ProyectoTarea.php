<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoTarea extends Model
{
    protected $guarded = [];

    protected $primaryKey = 'id_proyecto';


    public function tareasProyecto()
    {
        return $this->hasMany(Tarea::class, 'id_tarea', 'id_tarea');
    }
}
