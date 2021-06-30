@extends('layouts.plantilla')
@section('content')
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
    <div class="form-group col-md-6">
        <label>Monto</label>
        <input type="text" name="asunto" class="form-control" value="$35000">
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