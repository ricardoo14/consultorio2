
 @extends('layouts.plantilla')
 @section('content')
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Register-Form-Clean.css') }}" rel="stylesheet">

</head>

<body>
    <section class="register-clean">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="sr-only">Register Form</h2>
            <div class="illustration"><i class="fas fa-heartbeat"></i></div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="nombre" placeholder="nombre" type="text"
                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                        value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input id="apellido" placeholder="apellido" type="text"
                        class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                        value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="rut" placeholder="rut" type="text"
                        class="form-control @error('rut') is-invalid @enderror" name="rut" value="{{ old('rut') }}"
                        required autocomplete="rut" autofocus>
                    @error('rut')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input id="email" placeholder="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="password" placeholder="contraseña" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input id="password-confirm" placeholder="confirmar contraseña" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-5">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
@endsection