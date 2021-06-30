@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Horas de usuario <a href="horas/create"><button type="button" class="btn btn-success float-right">Crear hora</button></a></h2>
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
                <th scope="col">Fecha de hora</th>
                <th scope="col">Medico</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hora as $h)
                <tr>
                    <th scope="row"></th>
                    <td>{{$h->hora}}</td>
                    <td>{{$h->idMedico}}</td>
                    <td><a href="{{ route('horas.show', $h->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                    <td><a href="{{ route('pago', $h->id) }}"><button type="button" class="btn btn-secondary">Pagar</button></a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection