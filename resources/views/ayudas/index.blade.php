@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Asistencia de pacientes <a href="ayudas/create"><button type="button" class="btn btn-success float-right">Pedir asistencia</button></a></h2>
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
                <th scope="col">Asunto</th>
                <th scope="col">Respuesta</th>
                <th scope="col">Acccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ayuda as $a)
                <tr>
                    <th scope="row"></th>
                    <td>{{$a->created_at}}</td>
                    <td>{{$a->asunto}}</td>
                    <td>{{$a->respuesta}}</td>
                    <td><a href="{{ route('ayudas.show', $a->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection