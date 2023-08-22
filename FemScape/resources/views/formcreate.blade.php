@extends('layouts.app')

@section('connected')
    <a href=""><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

        <link rel="stylesheet" href="{{ asset('css/formedit.css') }}">
@section('content')
    <main class="container mt-5">
        <div class="row">
            <div class="liner"></div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <form class="custom-form" data-toggle="validator">
                    <h2 class="text-center mb-9 title">Crear destino</h2>
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Escribe un título" required>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicación</label>
                                <select class="form-control mt-1" id="ubicacion" placeholder="Seleccione una ubicación" required>
                                    <option value="">Seleccione una ubicación</option>
                                </select>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="form-control-file" id="imagenInput">
                                <input type="text" class="form-control mt-1" id="titulo" placeholder="Sube una imagen" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="comentarios">¿Por qué quieres viajar allí?</label>
                            <textarea class="form-control" id="comentarios" rows="10" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
