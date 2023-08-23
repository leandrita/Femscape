@extends('layouts.app')

{{-- @section('connected')
    <a href=""><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection --}}

@section('content')
<main class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <form class="custom-form" action="{{ route('create.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-center mb-3 title border-bottom border-3 pb-2">Crear destino</h2>

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text"  name="place" class="form-control mt-4" id="titulo" placeholder="Escribe un título" required>
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicación</label>
                    <select name="country" class="form-control mt-4" id="ubicacion" placeholder="Seleccione una ubicación" required>
                        <option value="">Seleccione una ubicación</option>
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="imagen" class="form-control-file" id="imagenInput">
                    <input type="text"  name="image" class="form-control mt-4" id="imagen" placeholder="Sube una imagen" required>
                </div>
                <div class="form-group mt-3">
                    <label for="comentarios">¿Por qué quieres viajar allí?</label>
                    <div class="d-flex">
                        <textarea name="description" class="form-control flex-grow-1" id="comentarios" rows="10" required></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                    
                </div>
            </form>
        </div>
    </div>
</main>

@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('\public\javascript\selectubication.js') }}"></script>
</html>
