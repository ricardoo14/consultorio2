@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Empleados <a href="gestionempleados/create"><button type="button" class="btn btn-success float-right">Crear empleado</button></a></h2>
        </div>
        <div class="col-md-6"></div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Rut</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($emple as $e)
                <tr>
                    <th scope="row"></th>
                    <td>{{$e->nombre}}</td>
                    <td>{{$e->apellido}}</td>
                    <td>{{$e->rut}}</td>

                    
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection