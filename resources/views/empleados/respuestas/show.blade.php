@extends('layouts.plantilla')
@section ('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Respuesta</h1> 
    
</div>
</div>
<div class="container">
    
<p class="lead">Fecha de pregunta: {{$p->created_at}}</p>

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
            <textarea name="mensaje" rows="4"class ="form-control"placeholder="Ingresa tu mensaje!" readonly>{{$p->mensaje}}</textarea>
            {{-- <input type="text" name="mensaje" value="{{$p->mensaje}}" class="form-control" readonly> --}}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label>Respuesta</label>
            <textarea name="respuesta" rows="4"class ="form-control"placeholder="Ingresa tu respuesta!"></textarea>
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