@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Datos recibidos del formulario:</h2>
        <pre>{{ var_dump($data) }}</pre>
    </div>
@endsection
