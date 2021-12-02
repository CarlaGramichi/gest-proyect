@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-border-color"></i>
                </span> Editar Responsable
            </h3>
        </div>

        <div class="col-12 grid-margin stretch-card">

            {!! Form::model($responsable,['route' => ['responsable.update', $responsable], 'method' => 'PUT', 'files' => true, 'class' => 'col-sm-12']) !!}

            @include('respon.partials.form')

            {!! Form::close() !!}

        </div>
    </div>

@endsection
