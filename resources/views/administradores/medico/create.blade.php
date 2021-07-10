@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear medico </h2>
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

        <form action="/gestionmedicos" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label >Especialidad</label>
                     <select name="idEspecialidad" class="form-control" >
                     <option value="selected disabled">Elige una especialidad </option>
                     @foreach($espe as $e)
                     <option value="{{$e->id}}">{{$e->nombre}}</option>
                     @endforeach
                     </select>
                 </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Rut</label>
                    <input type="text" name="rut" class="form-control" placeholder="Rut">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <label>Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirme Contraseña">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>

    </div>

@endsection
