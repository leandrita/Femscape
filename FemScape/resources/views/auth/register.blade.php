@extends('layouts.app')

@section('non-connected')
    <a href=""><img src="{{ asset('assets/images/Avatar-icon.svg') }}" class="navbar-icons" alt=""></a>
@endsection

@section('content')
<form action="{{ route('register') }}" method="POST" novalidate>
    @csrf
    <h2 class="text-center mb-3 title border-bottom border-3 pb-2">Registro de usuario</h2>
    
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control @error('name') border border-danger @enderror" value="{{ old('name') }}" id="name" placeholder="Escribe tu nombre...">
    
        @error('name')
        <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="Escribe tu e-mail...">
      
      @error('email')
        <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" name="password" class="form-control @error('password') border border-danger @enderror" id="password" placeholder="Escribe tu contraseña...">
        
      @error('password')
      <p class="alert alert-danger" role="alert">{{ $message }}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Aceptar</button>
    <a class="btn btn-danger" href="{{ route('index') }}" role="button">Cancelar</a>
    <p>¿Ya tienes una cuenta? Accede <a href="{{route ('login') }}">aquí</a></p>
  </form>
@endsection
