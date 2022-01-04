@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Detalle hora</h2>
            </div>
            <div class="col-md-6"></div>
        </div>

        <fieldset disabled>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Fecha</label>
                    <input type="text" id="disabledTextInput" value="{{ $hora->fecha}}"
                        class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Hora</label>
                    <input type="text" id="disabledTextInput" value="{{ $hora->hora }}" class="form-control">
                </div>   
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="disabledTextInput" class="form-label">Medico</label>
                  <input type="text" id="disabledTextInput" value="{{ $hora->userm->nombre}} {{ $hora->userm->apellido}}" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label for="disabledTextInput" class="form-label">Especialidad</label>
                <input type="text" id="disabledTextInput" value="{{ $hora->userm->especialidad->nombre}}"
                    class="form-control">
            </div>
          </div>
        </fieldset>

    </div>
@endsection
