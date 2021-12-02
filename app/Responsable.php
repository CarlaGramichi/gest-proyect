<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_responsable';


    public function estado(){
        return $this->belongsTo(Estado::class,'id_estado','id_estado');
    }
}
