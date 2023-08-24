@extends('layouts.app')

@section('content')
    <main class="container mt-5 d-flex justify-content-center">
                <form action="{{route('update', $trip)}}" method="POST" class="custom-form edit-form">
                    @csrf
                    @method('PUT')
                    <h2 class="text-center mb-9 title">Editar destino</h2>
                    <div class="w-100 border-bottom border my-10 line"></div>
                    <div class="d-flex justify-content-around">
                        
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" name="place" class="form-control" id="titulo" placeholder="Escribe un título" required value="{{$trip->place}}">
                                <div class="help-block with-errors"></div>
                                <label for="ubication">Ubicación</label>
                                <input class="form-control" name="country" id="ubicacion" placeholder="Escriba una ubicación" required value="{{$trip->country}}">
                                <label for="ubication">Imagen</label>
                                <input type="text" name="image" class="form-control" id="titulo" placeholder="Sube una imagen" required value="{{$trip->image}}">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <a href="{{ route('show', $trip->id) }}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                        </div>

                        <div class="col-md-6">
                            <label for="description">¿Por qué quieres viajar allí?</label>
                            <textarea class="form-control" name="description" id="comentarios" rows="12" required>{{$trip->description}}</textarea>
                        </div>
                    </div>
                </form>
    </main>
@endsection
