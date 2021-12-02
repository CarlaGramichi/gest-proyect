@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                   <i class="fas fa-calendar-alt"></i>
                </span>Proyecto: Casa Amarilla
            </h3>
            <a href="{{ route('task.create') }}" type="submit" class="btn btn-gradient-primary mr-2">
              <i class="mdi mdi-plus"></i>  Nueva Tarea
            </a>

        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Descripción</h4>
                        <p class="card-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                            vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase text-danger">Tareas Pendientes</h4>
                        <ul class="list-arrow">
                            <li>
                                <a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Prendiente 1
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Prendiente 2
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Prendiente 3
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Prendiente 4
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Prendiente 5
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase text-warning">Tareas En Proceso</h4>
                        <ul class="list-arrow">
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea En proceso 1
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea En proceso 2
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea En proceso 3
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea En proceso 4
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase text-success">Tareas Completas</h4>
                        <ul class="list-arrow">
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Completa 1
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Completa 2
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Completa 3
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Completa 4
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Completa 5
                                </a>
                            </li>
                            <li><a href="#" class="menu-title" data-toggle="modal" data-target="#exampleModal"
                                   style="color: #b66dff!important;">
                                    Tarea Completa 6
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tarea 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box task-detail">
                                    <div class="media mt-0 m-b-30">
                                        <img class="d-flex mr-3 rounded-circle" alt="64x64"
                                                                        src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                        style="width: 48px; height: 48px;">
                                        <div class="media-body">
                                            <h5 class="media-heading mb-0 mt-0">Responsable: <br>James L. Kelley</h5>
                                        </div>
                                    </div>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet.</p>
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
                                            <a href="#"><img class="rounded-circle thumb-sm" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar2.png"> </a>
                                            <a href="#"><img class="rounded-circle thumb-sm" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar8.png"> </a>
{{--                                            <a href="#"><span class="add-new-plus"><i class="fa fa-plus"></i></span></a>--}}
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Estado</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option>Pendiente</option>
                                                <option>En Proceso</option>
                                                <option>Completada</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


<style>
    body {
        margin-top: 20px;
        background: #90d2ff;
    }

    .card-box {
        padding: 20px;
        border-radius: 3px;
        margin-bottom: 30px;
        background-color: #fff;
    }

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
