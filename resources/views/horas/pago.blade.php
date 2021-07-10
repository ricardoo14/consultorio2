@extends('layouts.plantilla')
@section('content')
<div class="container">
<form action="/pagos" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
    <table class="table table-warning">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Monto bruto</th>
                <th scope="col">Descuento prevision</th>
                <th scope="col">Monto final</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>${{$hora->userm->especialidad->valor}}</td>
                    <td>{{$hora->user->prevision->descuento}}%</td>
                    <td>{{$total=(($bruto=$hora->userm->especialidad->valor)-($descuento= ($bruto/100)*($hora->user->prevision->descuento)))}}</td>
                    <td></td>
                </tr>  
        </tbody>
    </table>   
</div>

<div class="d-none">
    <div class="form-group col-md-6">
        <input type="text" name="valor" class="form-control" value="{{$total}}">
    </div>
    <div class="form-group col-md-6">
        <input type="text" name="idHora" class="form-control" value="{{$hora->id}}">
    </div>
</div>

    <div class="row">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Pagar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
</form>
</div>
@endsection