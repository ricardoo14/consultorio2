@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear hora</h2>
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

        @livewire('hora-component')
    </div>

@endsection