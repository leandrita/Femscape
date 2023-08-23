@extends('layouts.app')

@section('connected')
    <a href=""><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

@section('content')
    <form action="{{route('store')}}" method="POST">
        @csrf
        <label>
            Lugar:
            <input type="text" name="place">
        </label>
        <br>
        <label>
            Pais:
            <input type="text" name="country">
        </label>
        <br>
        <label>
            Imagen:
            <input type="text" name="image">
        </label>
        <br>
        <label>
            Descripcion:
            <textarea type="text" name="description"></textarea>
        </label>
        <br>
        <button type="submit">enviar</button>
    </form>
@endsection
