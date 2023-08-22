@extends('layouts.app')

@section('connected')
    <a href=""><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

@section('content')
    <main class="container mt-5">
        <div class="row">
            <div class="liner"></div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <h2 class="text-center mb-9 title">Crear destino</h2>
                    <div class="col-md-12">
                        <form action="{{ route('create.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text"  name="place" class="form-control" id="titulo" placeholder="Escribe un título" required>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicación</label>
                                <select name="country" class="form-control mt-1" id="ubicacion" placeholder="Seleccione una ubicación" required>
                                    <option value="">Seleccione una ubicación</option>
                                </select>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="imagen" class="form-control-file" id="imagenInput">
                                <input type="text"  name="image" class="form-control mt-1" id="imagen" placeholder="Sube una imagen" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="comentarios">¿Por qué quieres viajar allí?</label>
                            <textarea name="description" class="form-control" id="comentarios" rows="10" required></textarea>
                        </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
