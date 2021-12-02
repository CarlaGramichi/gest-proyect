<div class="card">
    <div class="card-body">
        <h4 class="card-title">Datos Personales</h4>
        {{--                    <p class="card-description"> Basic form elements </p>--}}
        <form class="forms-sample">
            <div class="form-group">
                {!! Form::label('name', 'Nombre(s) y apellido(s)') !!}
                {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Nombre', 'required']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'Email', 'required']) !!}
            </div>
            @if(!$responsable)
                <div class="form-group">
                    {!! Form::label('password', 'Contraseña') !!} <br>
                    {!! Form::password('password',['class' => 'form-control','required']) !!}
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!}
                {!! Form::text('fecha_inicio', null, ['class' => 'form-control','placeholder'=>'dd/mm/yyyy', 'required']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('tmp_file', 'Foto de Perfil') !!} <br>
                {!! Form::file('tmp_file',null,['class' => 'form-control'], ['accept' => 'image/*']) !!}

                @if(isset($responsable->image))
                    <div class="store-file-container">
                        <p class="mt-3">
                            <strong>
                                Imágen cargada
                                <br>
                                <a href="{{asset('uploads/'.$responsable->image)}}" target="_blank">
                                    <img src="{{asset('uploads/'.$responsable->image)}}" class="img-thumbnail"
                                         alt="Uploaded image" title="{{ $responsable->nombre }}" width="62px">
                                </a>
                                <br>
                                <a href="{{asset('uploads/'.$responsable->image)}}" download>Descargar</a>
                                | <a href="#" class="text-danger remove-image">Eliminar</a>
                            </strong>
                        </p>

                        <input type="hidden" name="image" value="{{ $responsable->image }}">
                    </div>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('id_estado', 'Estado') !!}
                {!! Form::select('id_estado', $estados, null,['class' => 'form-control']) !!}

            </div>
            <a href="{{ route('responsable.index') }}" class="btn btn-gradient-danger">
                <span class="fas fa-arrow-left"></span>
                &emsp;Cancelar
            </a>
            <button type="submit" class="btn btn-gradient-success mr-2 float-right">
                <span class="fas fa-save"></span>
                &emsp;Guardar
            </button>
        </form>
    </div>
</div>
