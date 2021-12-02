<?php

use App\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new Estado();
        $estado->nombre_estado = 'En proceso';
        $estado->color = 'badge-warning';
        $estado->tipo = 'Proyecto';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Pausado';
        $estado->color = 'badge-info';
        $estado->tipo = 'Proyecto';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Finalizado';
        $estado->color = 'badge-success';
        $estado->tipo = 'Proyecto';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Cancelado';
        $estado->color = 'badge-danger';
        $estado->tipo = 'Proyecto';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Activo';
        $estado->color = 'badge-success';
        $estado->tipo = 'Usuario';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'De vacaciones';
        $estado->color = 'badge-warning';
        $estado->tipo = 'Usuario';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Inactivo';
        $estado->color = 'badge-danger';
        $estado->tipo = 'Usuario';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Pendiente';
        $estado->color = 'badge-danger';
        $estado->tipo = 'Tareas';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'En proceso';
        $estado->color = 'badge-warning';
        $estado->tipo = 'Usuario';
        $estado->save();

        $estado = new Estado();
        $estado->nombre_estado = 'Finalizada';
        $estado->color = 'badge-success';
        $estado->tipo = 'Usuario';
        $estado->save();

    }
}
