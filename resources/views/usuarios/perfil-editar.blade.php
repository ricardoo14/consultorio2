@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Editar Perfil de usuario</h2>
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
            <div class="col-md-6"></div>
        </div>
        <form action="{{ route('perfil.update', $use->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $use->nombre }}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="{{ $use->apellido }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="tefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="{{ $use->telefono }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="{{ $use->direccion }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="rut">Rut</label>
                    <input type="text" class="form-control" name="rut" value="{{ $use->rut }}" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $use->email }}"
                        placeholder="Escribe tu email" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="prevision">Prevision</label>
                    <input type="text" class="form-control" name="prevision" value="{{ $use->prevision->nombre}}"
                        placeholder="prevision" readonly>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Modificar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>

    </div>
@endsection
