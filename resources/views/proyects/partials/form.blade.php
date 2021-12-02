<div class="card">
    <div class="card-body">
        <h4 class="card-title">Datos del Proyecto</h4>
        <div class="forms-sample form-body">
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre del Proyecto') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control','placeholder'=>'Nombre del Proyecto', 'required']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!}
                {!! Form::text('fecha_inicio', null, ['class' => 'form-control', 'placeholder'=>'dd/mm/yyyy']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('fecha_fin', 'Fecha de Fin') !!}
                {!! Form::text('fecha_fin', null, ['class' => 'form-control', 'placeholder'=>'dd/mm/yyyy']) !!}


            </div>
            <div class="form-group">
                {!! Form::label('id_responsable', 'Responsable') !!}
                {!! Form::select('id_responsable', $responsables, null,['class' => 'form-control', 'placeholder'=>'Seleccionar un responsable']) !!}
{{--                {!! Form::text('id_responsable', null, ['class' => 'form-control', 'placeholder'=>'Responsable']) !!}--}}

            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::textarea('descripcion',null, ['class' => 'form-control', 'placeholder'=>'Descripcion']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('id_estado', 'Estado') !!}
                {!! Form::select('id_estado', $estados, null,['class' => 'form-control']) !!}

            </div>

            <a href="{{route('proyect.index')}}" class="btn btn-gradient-danger">
                <span class="fas fa-arrow-left"></span>
                &emsp;Cancelar
            </a>
            <button type="submit" class="btn btn-gradient-success mr-2 float-right">
                <span class="fas fa-save"></span>
                &emsp;Guardar
            </button>
        </div>
    </div>
</div>
