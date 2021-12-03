@extends('layouts.app')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                   <i class="fas fa-calendar-alt"></i>
                </span> Listado de Proyectos
            </h3>
        </div>
        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="table">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th> Nombre</th>
                                    <th> Fecha de Inicio</th>
                                    <th> Fecha de Fin</th>
                                    <th> Progreso</th>
                                    @if(auth()->user()->id_rol == 1)
                                        <th> Acciones</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @if($proyectos !=null)
                                    @foreach($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ $proyecto->id_proyecto }}</td>
                                            <td><a class="menu-title"
                                                   href="{{route('proyect.show',[$proyecto->id_proyecto ])}}"
                                                   style="color: #b66dff!important;">{{ $proyecto ->nombre }}</a>
                                            </td>
                                            <td> {{ $proyecto->fecha_inicio }}</td>
                                            <td> {{ $proyecto->fecha_fin }}</td>
                                            <td><label
                                                    class="badge {{$proyecto->estado->color}}">{{ $proyecto->estado->nombre_estado }}</label>
                                            </td>
                                            @if(auth()->user()->id_rol == 1)
                                                <td>
                                                    <a href="{{route('proyect.edit',[$proyecto->id_proyecto ])}}"
                                                       class="btn btn-inverse-primary btn-icon"
                                                       style="padding: 12px!important;">
                                                        <span class="mdi mdi-border-color mb-5"></span>
                                                    </a>
                                                    <a href="#" class="btn btn-inverse-danger btn-icon"
                                                       style="padding: 12px!important;"
                                                       onclick="$(this).find('form').submit();">
                                                        <form
                                                            action="{{ route('proyect.destroy',[$proyecto->id_proyecto ]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete"/>
                                                        </form>

                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        <b>No tiene tareas asiganadas en ningúnn proyecto.</b>
                                    </div>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

