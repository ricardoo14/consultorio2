@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Respuesta a pacientes</h2>
            @if (session('info'))
            <div class="alert alert-success">
              <strong>{{session('info')}}</strong>
            </div>
            @endif
        </div>
        <div class="col-md-6"></div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Fecha de ayuda</th>
                <th scope="col">Paciente</th>
                <th scope="col">Asunto</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($preguntas as $p)
                <tr>
                    <th scope="row"></th>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->user->nombre}} {{$p->user->apellido}}</td>
                    <td>{{$p->asunto}}</td>
                    <td>{{$p->mensaje}}</td>
                    <td>
                        <a href="{{ route('respuestas.show', $p->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                    </td>
                   
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection