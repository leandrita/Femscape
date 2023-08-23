@extends('layouts.app')

@section('non-connected')
    <a href=""><img src="{{ asset('assets/images/Avatar-icon.svg') }}" class="navbar-icons" alt=""></a>
@endsection

@section('content')
<form novalidate>
    <h2 class="text-center mb-3 title border-bottom border-3 pb-2">Acceso de usuario</h2>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control @error('email') border border-danger @enderror" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="Escribe tu e-mail...">
        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control @error('password') border border-danger @enderror" id="password" placeholder="Escribe tu contraseña...">
      </div>
    <button type="submit" class="btn btn-primary">Aceptar</button>
    <button type="submit" class="btn btn-primary">Cancelar</button>
  </form>
@endsection
