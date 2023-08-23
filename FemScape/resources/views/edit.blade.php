@extends('layouts.app')

{{-- @section('connected')
    <a href=""><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection --}}

@section('content')
    <main class="container mt-5">
        <div class="row">
            <div class="liner"></div>
            <div class="col-md-12 d-flex flex-column flex-md-row justify-content-center align-items-center custom-container mt-">
                <form class="custom-form">
                    <h2 class="text-center mb-9 title">Editar destino</h2>
                    <div class="w-100 border-bottom border my-10"></div>
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Escribe un título" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="ubication">Ubicación</label>
                                <select class="form-control" id="ubicacion" placeholder="Seleccione una ubicación" required>
                                    <option value="">Seleccione una ubicación</option>
                                </select>
                            </div>
                            <div class="custom-file">
                                <label for="ubication">Imagen</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Sube una imagen" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                            <div class="mb-2"></div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="description">¿Por qué quieres viajar allí?</label>
                            <textarea class="form-control" id="comentarios" rows="12" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
