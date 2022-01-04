@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Detalle asistencia</h2>
            </div>
            <div class="col-md-6"></div>
        </div>

        <fieldset disabled>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Asunto</label>
                    <input type="text" name="asunto" value="{{$ayuda->asunto}}" class="form-control" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label>Mensaje</label>
                    <textarea name="mensaje" rows="4"class ="form-control" readonly>{{$ayuda->mensaje}}</textarea>
                    {{-- <input type="text" name="mensaje" value="{{$p->mensaje}}" class="form-control" readonly> --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Respuesta</label>
                    <textarea name="respuesta" rows="4"class ="form-control" readonly>{{$ayuda->respuesta}}</textarea>
            </div>
            
        </fieldset>

    </div>
@endsection
