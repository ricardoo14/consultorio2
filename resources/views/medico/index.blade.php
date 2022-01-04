@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Horas medico</h2>
                @if (session('info'))
                    <div class="alert alert-success">
                        <strong>{{ session('info') }}</strong>
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
                    <th scope="col">Paciente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hora as $h)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $h->fecha }}</td>
                        <td>{{ $h->hora }}</td>
                        <td>{{ $h->user->nombre }} {{ $h->user->apellido }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
