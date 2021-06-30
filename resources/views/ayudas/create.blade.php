@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear peticion de asistencia</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

       

        <form action="/ayudas" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
            <div class="form-group col-md-6">
                <label>Asunto</label>
                <input type="text" name="asunto" class="form-control" placeholder="Asunto">
            </div>
            <div class="form-group col-md-6">
                <label>Mensaje</label>
                <input type="text" name="mensaje" class="form-control" placeholder="Mensaje">
            </div>
        </div>

            


            <div class="row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>

    </div>

@endsection
