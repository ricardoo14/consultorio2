@extends('layouts.plantilla')
@section ('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Respuesta</h1> 
    
</div>
</div>
<div class="container">
    
<p class="lead">Fecha de hora:{{-- {{$hora->hora}} --}}</p>

<form action="{{route('respuestas.update',$p->id)}}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf

    <div class="row">
        <div class="form-group col-md-6">
            <label>Asunto</label>
            <input type="text" name="asunto" value="{{$p->asunto}}" class="form-control" readonly>
        </div>
        <div class="form-group col-md-6">
            <label>Mensaje</label>
            <input type="text" name="mensaje" value="{{$p->mensaje}}" class="form-control" readonly>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Respuesta</label>
            <input type="text" name="respuesta" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Enviar Respuesta</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
</form>
</div>
@endsection