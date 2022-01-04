@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Horas de usuario <a href="horas/create"><button type="button" class="btn btn-success float-right">Crear
                            hora</button></a></h2>
                @if (session('info'))
                    <div class="alert alert-success">
                        <strong>{{ session('info') }}</strong>
                    </div>
                @endif
                @if (session('infa'))
                    <div class="alert alert-danger">
                        <strong>{{ session('infa') }}</strong>
                    </div>
                @endif
            </div>
            <div class="col-md-6"></div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Accion</th>
                    <th scope="col">Pago</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hora as $h)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $h->fecha }}</td>
                        <td>{{ $h->hora }}</td>
                        <td>{{ $h->userm->especialidad->nombre }}</td>
                        <td><a href="{{ route('horas.show', $h->id) }}"><button type="button"
                                    class="btn btn-secondary">Ver</button></a>
                        <td>
                            @if ($h->idEstadoHora == '1')
                                <a href="{{ route('pagos.show', $h->id) }}"><button type="button"
                                        class="btn btn-success">Pagar</button></a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
