@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Medicos <a href="gestionmedicos/create"><button type="button" class="btn btn-success float-right">Crear medico</button></a></h2>
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
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Especialidad</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($medi as $m)
                <tr>
                    <th scope="row"></th>
                    <td>{{$m->nombre}}</td>
                    <td>{{$m->apellido}}</td>
                    <td>{{$m->especialidad->nombre}}</td>
                    
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection