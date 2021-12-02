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
                                    <th> Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
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
                                        <td>
                                            <a href="{{route('proyect.edit',[$proyecto->id_proyecto ])}}"
                                               class="btn btn-inverse-primary btn-icon"
                                               style="padding: 12px!important;">
                                                <span class="mdi mdi-border-color mb-5"></span>
                                            </a>
                                            <a href="{{route('proyect.destroy',[$proyecto->id_proyecto ])}}"
                                               class="btn btn-inverse-danger btn-icon" style="padding: 12px!important;">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

