<div>
    <form action="/horas" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="form-group col-md-6">
                <label>Hora</label>
                <input type="datetime-local" name="hora" class="form-control" placeholder="Hora">
            </div>
        </div>

        <select class="form-group col-md-6" name="especialidad" wire:change='listarMedicos($event.target.value)'>
            <option selected>Seleccione Especialidad</option>
            @foreach ($especialidades as $e)
            <option value="{{$e->id}}">{{$e->nombre}}</option>
            @endforeach
          </select>
        
          <select class="form-group col-md-6" name="medico" >
            <option selected>Seleccione medico</option>
            @if ($medicos)
                 @foreach ($medicos as $m)
            <option value="{{$m->id}}">{{$m->nombre}}</option>
            @endforeach
            @endif
          </select>

        <div class="row">
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </form>
</div>
