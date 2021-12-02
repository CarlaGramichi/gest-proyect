@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-plus"></i>
                </span> Tarea Nueva
            </h3>
        </div>

        <div class="col-12 grid-margin stretch-card">
            {!! Form::open(['route' => 'task.store', 'method'=>'post', 'class' => 'col-sm-12']) !!}

            @include('task.partials.form')

            {!! Form::close() !!}

        </div>
    </div>

@endsection
