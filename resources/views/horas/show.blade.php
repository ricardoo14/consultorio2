@extends('layouts.plantilla')
@section ('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$hora->idMedico}}</h1> 
    <p class="medium">Fecha de ingreso: {{$hora->created_at}}</p>
</div>
</div>
<div class="container">
    
<p class="lead">Fecha de hora:{{$hora->hora}}</p>

</div>
@endsection