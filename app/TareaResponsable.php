<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareaResponsable extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_tarea';

    public function responsable()
    {
        return $this->hasMany(Responsable::class, 'id_responsable', 'id_responsable');
    }
}
