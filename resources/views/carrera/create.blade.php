@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="col-lg-12 login-title">
                CREAR CARRERA
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form id="formulario" method="POST" action="{{ route('carrera.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">CÓDIGO</label>
                            <input id="codigo" type="text" class="form-control @error('codigo') is-invalid @enderror"
                                name="codigo" value="{{ old('codigo') }}" required autocomplete="codigo" autofocus>

                            @error('codigo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">NOMBRE</label>
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                                name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="col-lg-12 text-center">
                                <button id="boton" class="btn btn-outline-primary">{{ __('Agregar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
        const button = document.getElementById('boton');
        const form = document.getElementById('formulario')
        button.addEventListener('click', function(e)){
            e.preventDefault();
            Swal.fire({
                title: 'Confirme para crear la carrera',
                text: "No podra eliminar la carrera ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: 'Cancelar',
                confirmButtonText: 'Si, Confirmo'
            }).then((result) => {
                if (result.isConfirmed) {
                 Swal.fire(
                 'Carrera creada'
                else => {
                  Swal.fire(
                    'carrera no creada'
                  )
                }

                )
            }
            })
        }
    </script>
@endsection
