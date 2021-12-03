@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title text-uppercase">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                   <i class="fas fa-calendar-alt"></i>
                </span>{{$proyect->nombre}}
            </h3>
            <a href="{{ route('task.proyect',$proyect->id_proyecto) }}" type="submit"
               class="btn btn-gradient-primary mr-2">
                <i class="mdi mdi-plus"></i> Nueva Tarea
            </a>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Descripción</h4>
                        <p class="card-description">{{$proyect->descripcion}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase text-danger">Tareas Pendientes</h4>
                        <ul class="list-arrow">
                            @foreach($proyect->tareas as $tarea)
                                @foreach($tareaInfo as $info)
                                    @if($info->id_estado == '8' && $tarea->id_tarea == $info->id_tarea)
                                        <li class="mb-2">
                                            <a href="{{route('task.show', $tarea->id_tarea)}}" class="menu-title"
                                               style="color: #b66dff!important;">
                                                {{$info->titulo}}
                                            </a>
{{--                                            {{dd(auth()->user()->id)}}--}}
                                            @if($info->id_responsable == auth()->user()->id)
                                                <i class="fas fa-heart menu-icon" style="color: #b66dff!important;"></i>
                                                @endif
                                                &emsp;
                                                {{--                                            <a href="{{ url('/task/'.$info->id_tarea.'/edit/'.$proyect->id_proyecto) }}" class="btn btn-sm btn-info">--}}
                                                {{--                                                <i class="fa fa-edit"></i>--}}
                                                {{--                                            </a>--}}
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase text-warning">Tareas En Proceso</h4>
                        <ul class="list-arrow">
                            @foreach($proyect->tareas as $tarea)
                                @foreach($tareaInfo as $info)
                                    @if($info->id_estado == '9' && $tarea->id_tarea == $info->id_tarea)
                                        <li>
                                            <a href="{{route('task.show', $tarea->id_tarea)}}" class="menu-title"
                                               style="color: #b66dff!important;">
                                                {{$info->titulo}}
                                            </a>
                                            @if($info->id_responsable == auth()->user()->id)
                                                <i class="fas fa-heart menu-icon" style="color: #b66dff!important;"></i>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase text-success">Tareas Finalizadas</h4>
                        <ul class="list-arrow">
                            @foreach($proyect->tareas as $tarea)
                                @foreach($tareaInfo as $info)
                                    @if($info->id_estado == '10' && $tarea->id_tarea == $info->id_tarea)
                                        <li>
                                            <a href="{{route('task.show', $tarea->id_tarea)}}" class="menu-title"
                                               style="color: #b66dff!important;">
                                                {{$info->titulo}}
                                            </a>
                                            @if($info->id_responsable == auth()->user()->id)
                                                <i class="fas fa-heart menu-icon" style="color: #b66dff!important;"></i>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


