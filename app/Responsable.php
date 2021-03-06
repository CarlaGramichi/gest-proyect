<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $guarded = [];
    protected $table = 'users';

    public function estado(){
        return $this->belongsTo(Estado::class,'id_estado','id_estado');
    }

    public function rol(){
        return $this->belongsTo(Rol::class,'id_rol','id_rol');
    }

}
