<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Http\Requests\TareaRequest;
use App\Proyecto;
use App\ProyectoTarea;
use App\Responsable;
use App\Tarea;
use App\TareaResponsable;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        return view('task.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create(Proyecto $proyect)
    {
        $estados = Estado::where('tipo', 'Tareas')->get()->pluck('nombre_estado', 'id_estado');
        $responsables = Responsable::all();
        $proyect = $proyect->id_proyecto;

        return view('task.create', compact('estados', 'proyect', 'responsables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(TareaRequest $request)
    {
        $tarea = Tarea::create([
            'id_estado'   => $request['id_estado'],
            'titulo'      => $request['titulo'],
            'descripcion' => $request['descripcion'],
        ]);

        $proyectoTarea = ProyectoTarea::create([
            'id_proyecto' => $request['id_proyecto'],
            'id_tarea'    => $tarea['id_tarea'],
        ]);

        foreach ($request->responsable as $responsable) {
            TareaResponsable::create([
                'id_tarea'       => $tarea['id_tarea'],
                'id_responsable' => $responsable,
            ]);
        }

        return redirect()->route('proyect.show', $proyectoTarea->id_proyecto)->with('success', "Tarea creada con éxito. Id de la operación
 <strong>{$tarea->id_tarea}</strong>");

    }

    /**
     * Display the specified resource.
     *
     * @param Tarea $tarea
     * @return Application|Factory|Response|View
     */
    public function show(Tarea $task, TareaResponsable $responsable)
    {
//        dd($task->responsables[0]->id_responsable);
        $proyecto = ProyectoTarea::where('id_tarea', $task->id_tarea)->first();
        $proyectoId = Proyecto::where('id_proyecto', $proyecto->id_proyecto)->first();
        $responsableProyecto = User::where('id', $proyectoId->id_responsable)->first();
        $responsableTarea = TareaResponsable::join('users', 'users.id', '=', 'tarea_responsables.id_responsable')
            ->select('*')
            ->where('id_tarea', $task->id_tarea)
            ->get();

        return view('task.show', compact('task', 'proyecto', 'responsableProyecto', 'responsableTarea', 'proyectoId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tarea $tarea
     * @return Application|Factory|Response|View
     */
    public function edit(Tarea $task, $proyect)
    {
//        dd($task->responsables);
        $estados = Estado::where('tipo', 'Tareas')->get()->pluck('nombre_estado', 'id_estado');
        $responsables = User::all();
        return view('task.edit', compact('estados', 'task', 'responsables', 'proyect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tarea $tarea
     * @return RedirectResponse
     */
    public function update(Request $request, Tarea $task): RedirectResponse
    {
        $task->update([
            'id_estado'   => $request['id_estado'],
            'titulo'      => $request['titulo'],
            'descripcion' => $request['descripcion'],
        ]);

        $task->responsables()->delete();

        foreach ($request->responsable as $responsable) {
            $task->responsables()->create([
                'id_responsable' => $responsable,
            ]);
        }

        return redirect()->route('proyect.show', $request->id_proyecto)->with('success', "Tarea creada con éxito. Id de la operación
 <strong>{$task->id_tarea}</strong>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tarea $tarea
     * @return Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
