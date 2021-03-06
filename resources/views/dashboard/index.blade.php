@extends('layouts.app')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="fas fa-home"></i>
                </span> Inicio
            </h3>
        </div>

        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute"
                             alt="circle-image"/>
                        <h4 class="font-weight-normal mb-3">Proyectos<i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">40 Proyectos totales</h2>
                        {{--                <h6 class="card-text">Finalizados el 80%</h6>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute"
                             alt="circle-image"/>
                        <h4 class="font-weight-normal mb-3">Proyectos<i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">5 Proyectos en Proceso</h2>
                        <h6 class="card-text"></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute"
                             alt="circle-image"/>
                        <h4 class="font-weight-normal mb-3">Proyectos<i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">30 Proyectos Finalizados</h2>
                        {{--                <h6 class="card-text">Increased by 5%</h6>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Estadisticas de los ??ltimos a??os</h4>
                        <canvas id="barChart" style="height:230px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-white">Todo</h4>
                        <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input"
                                   placeholder="Qu?? necesitas hacer hoy?">
                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                    id="add-task">Agregar
                            </button>
                        </div>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Reuni??n con Ana </label>
                                    </div>
                                    <i class="remove far fa-times-circle"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked> Llamar a Robert</label>
                                    </div>
                                    <i class="remove far fa-times-circle"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Presentaci??n 15hs</label>
                                    </div>
                                    <i class="remove far fa-times-circle"></i>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
