@extends('layouts.app')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title text-uppercase">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                   <i class="fas fa-calendar-alt"></i>
                </span> {{$task->titulo}}
            </h3>
            <a href="{{route('task.edit', [$task->id_tarea, $proyectoId])}}" type="submit"
               class="btn btn-gradient-primary mr-2">
                <i class="mdi mdi-border-color"></i> Editar Tarea
            </a>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-box task-detail">
                            <div class="media mt-0 m-b-30">
                                <img class="d-flex mr-3 rounded-circle" alt="64x64"
                                     src="{{asset('uploads/'.$responsableProyecto->image)}}"
                                     style="width: 48px; height: 48px; object-fit: cover !important;">
                                <div class="media-body">
                                    <h5 class="media-heading mb-0 mt-0">Responsable del Proyecto: {{$responsableProyecto->apellido}}, {{$responsableProyecto->nombre}}
                                    </h5>
                                    <label class="badge {{$task->estado->color}}">{{$task->estado->nombre_estado}}</label>
                                </div>

                            </div>
                            <p class="text-muted">{{$task->descripcion}}</p>
                            <ul class="list-inline task-dates ">
                                <li>
                                    <h5 class="">Fecha de inicio:</h5>
                                    <p>01 December 2017 <small class="text-muted">1:00 PM</small></p>
                                </li>
                                <li>
                                    <h5 class="">Fecha estimada de fin:</h5>
                                    <p>17 February 2018 <small class="text-muted">12:00 PM</small></p>
                                </li>
                            </ul>

                            <div class="assign-team mt-4">
                                <h5 class="m-b-5">Asignados:</h5>
                                <div>
                                    @foreach($responsableTarea as $responsable)
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title='{{$responsable->nombre}}'><img class="rounded-circle thumb-sm" alt="64x64" style="object-fit: cover !important;"
                                                     src="{{asset('uploads/'.$responsable->image)}}">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
<style>
    /*body {*/
    /*    margin-top: 20px;*/
    /*    background: #90d2ff;*/
    /*}*/

    /*.card-box {*/
    /*    padding: 20px;*/
    /*    border-radius: 3px;*/
    /*    margin-bottom: 30px;*/
    /*    background-color: #fff;*/
    /*}*/

    .thumb-sm {
        height: 36px;
        width: 36px;
    }

    .task-detail .task-dates li {
        width: 50%;
        float: left
    }

    .task-detail .task-tags .bootstrap-tagsinput {
        padding: 0;
        border: none
    }

    .task-detail .assign-team a {
        display: inline-block;
        margin: 5px 5px 5px 0
    }

    .task-detail .files-list .file-box {
        display: inline-block;
        vertical-align: middle;
        width: 80px;
        padding: 2px;
        border-radius: 3px;
        -moz-border-radius: 3px;
        background-clip: padding-box
    }

    .task-detail .files-list .file-box img {
        line-height: 70px
    }

    .task-detail .files-list .file-box p {
        width: 100%;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .add-new-plus {
        height: 32px;
        text-align: center;
        width: 32px;
        display: block;
        line-height: 32px;
        color: #98a6ad;
        font-weight: 700;
        background-color: #e3eaef;
        border-radius: 50%
    }

    .project-sort-item .form-group {
        margin-right: 30px
    }

    .project-sort-item .form-group:last-of-type {
        margin-right: 0
    }

    .project-box {
        position: relative
    }

    .project-box .badge {
        position: absolute;
        right: 20px
    }

    .project-box h4 {
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block;
        width: 100%;
        overflow: hidden
    }

    .project-box ul li {
        padding-right: 30px
    }

    .project-box .project-members a {
        margin: 0 0 10px -12px;
        display: inline-block;
        border: 3px solid #fff;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
        box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02)
    }

    .project-box .project-members a:first-of-type {
        margin-left: 0
    }

    .company-card .company-logo {
        float: left;
        height: 60px;
        width: 60px;
        border-radius: 3px
    }

    .company-card .company-detail {
        margin: 0 0 50px 75px
    }

    .text-muted {
        color: #98a6ad !important;
    }

    p {
        line-height: 1.6;
        font-size: 14px;
    }

    .bootstrap-tagsinput .label-info {
        background-color: #02c0ce;
        display: inline-block;
        padding: 4px 8px;
        font-size: 13px;
        margin: 3px 1px;
        border-radius: 3px;
    }
</style>
