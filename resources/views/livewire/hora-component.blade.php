<div>
    <form action="/horas" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="form-group col-md-6">
                <label>Fecha</label>
                <input type="date" name="fecha" class="form-control" placeholder="Hora">
            </div>
        </div>
        <div class="row">
            <select class="form-select" aria-label="Seleccione hora" name="hora">
                <option selected>Hora</option>
                <option value="8">08:00</option>
                <option value="10">10:00</option>
                <option value="12">12:00</option>
                <option value="14">14:00</option>
                <option value="16">16:00</option>
              </select>
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
