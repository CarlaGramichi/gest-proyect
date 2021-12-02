@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="fas fa-users menu-icon"></i>

                </span> Listado de Usuarios
            </h3>
        </div>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th> Usuarios</th>
                                <th> Nombre y Apellido</th>
                                <th> Email</th>
                                <th> Fecha de Inicio</th>
                                <th> Estado</th>
                                <th> Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($responsables as $responsable)
                                <tr>
                                    <td>
                                        <img src="{{asset('uploads/'.$responsable->image)}}" alt="image"/>
                                    </td>
                                    <td>
                                        <a class="menu-title" href="{{ url('/users/' . $responsable->id) }}" style="color: #b66dff!important;">
                                            {{$responsable->name}}
                                        </a>
                                    </td>

                                    <td>{{$responsable->email}}</td>
                                    <td> {{$responsable->fecha_inicio}}</td>
                                    <td><label
                                            class="badge {{$responsable->estado->color}}">{{$responsable->estado->nombre_estado}}</label>
                                    </td>

                                    <td>
                                        <a href="{{route('responsable.edit',$responsable->id)}}"
                                           class="btn btn-inverse-primary btn-icon" style="padding: 12px!important;">
                                            <span class="mdi mdi-border-color mb-5"></span>
                                        </a>
                                        <a href=""
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

@endsection
