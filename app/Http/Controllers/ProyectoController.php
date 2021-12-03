<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Http\Requests\ProyectoRequest;
use App\Proyecto;
use App\Responsable;
use App\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;
use Yajra\DataTables\Facades\DataTables;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $proyectos = Proyecto::where('is_deleted', '0')->paginate();
//        dd($proyectos);

        return view('proyects.index',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $estados = Estado::where('tipo','Proyecto')->get()->pluck('nombre_estado', 'id_estado');
        $responsables = Responsable::where('is_deleted', '0')->get()->pluck('name', 'id');

        return view('proyects.create', compact('estados','responsables'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProyectoRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyect.index')->with('success', "Proyecto guardado con éxito. Id de la operación
 <strong>{$proyecto->id_proyecto}</strong>");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyect
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|View
     */
    public function show(Proyecto $proyect)
    {
        $tareaInfo = Tarea::join('tarea_responsables', 'tarea_responsables.id_tarea', '=', 'tareas.id_tarea')
            ->where('is_deleted', '0')
            ->get();

        return view('proyects.show',compact('proyect','tareaInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|View
     */
    public function edit(Proyecto $proyect)
    {
        $estados = Estado::where('tipo','Proyecto')->get()->pluck('nombre_estado', 'id_estado');
        $responsables = Responsable::where('is_deleted', '0')->get()->pluck('name', 'id');

        return view('proyects.edit',compact('proyect','estados','responsables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProyectoRequest $request, Proyecto $proyect)
    {
        $proyect->update($request->all());
        return redirect()->route('proyect.index')->with('success', "Proyecto actualizado con éxito. Id de la operación <strong>{$proyect->id}</strong>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyect
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Proyecto $proyect)
    {
        $proyect->update(['is_deleted' => '1']);

        return redirect()->route('proyect.index')->with('success', "Proyecto eliminado con éxito.");
    }

    public function myproyect()
    {
        $proyectos = Proyecto::join('proyecto_tareas', 'proyecto_tareas.id_proyecto','=','proyectos.id_proyecto')
            ->join('tarea_responsables', 'tarea_responsables.id_tarea', 'proyecto_tareas.id_tarea')
            ->join('tareas', 'tareas.id_tarea', 'proyecto_tareas.id_tarea')
            ->select('*')
            ->where('proyectos.is_deleted', '0','and')
            ->where('tareas.is_deleted', '0','and')
            ->where('tarea_responsables.id_responsable', '=', Auth::user()->id)->get();

//       $id_proyecto =  $proyectos->id_proyecto;
        return view('proyects.index',compact('proyectos'));
    }
}
