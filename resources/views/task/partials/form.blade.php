<div class="card">
    <div class="card-body">
        <h4 class="card-title">Datos De la tarea</h4>
        <form class="forms-sample">
            <div class="form-group">
                {!! Form::text('id_proyecto', $proyect, ['class' => 'form-control', 'hidden','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('titulo', 'Título') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control','placeholder'=>'Título', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('id_responsable', 'Asignar:') !!}
                <select class="selectpicker show-tick form-control" multiple size="8"
                        title="Selecciona uno o mas responsables"
                        data-selected-text-format="count > 20"
                        data-live-search="true" data-live-search-placeholder="Buscar"
                        data-style="btn-primary" data-actions-box="true"
                        id="responsable" name="responsable[]" required>

                    @foreach($responsables as $responsable)
                        <option value="{{ $responsable->id }}" {{ isset($task) && $task->responsables->contains('id_responsable',$responsable->id) ? 'selected' : '' }}>
                            {{ $responsable->name }}
                        </option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                {!! Form::textarea('descripcion',null, ['class' => 'form-control', 'placeholder'=>'Descripción', 'required']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('id_estado', 'Estado') !!}
                {!! Form::select('id_estado', $estados, null,['class' => 'form-control']) !!}
            </div>
            <a href="{{route('proyect.show', $proyect)}}" class="btn btn-gradient-danger">
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
