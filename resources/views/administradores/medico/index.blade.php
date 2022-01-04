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
                <th scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($medi as $m)
                <tr>
                    <th scope="row"></th>
                    <td>{{$m->nombre}}</td>
                    <td>{{$m->apellido}}</td>
                    <td>{{$m->especialidad->nombre}}</td>
                    <td>                    
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$m->id}}">
                            Eliminar
                          </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="modal-delete-{{$m->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <form action="{{ route('gestionmedicos.destroy', $m->id) }}" method="POST"> 
                        @csrf
                        @method('DELETE')
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Eliminación de usuarios</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Deseas eliminar a medico {{$m->nombre}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" class="btn btn-danger" value="Eliminar">
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                  <!-- EndModal -->
            @endforeach    
        </tbody>
    </table>
</div>
@endsection