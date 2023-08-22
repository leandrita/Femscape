<!DOCTYPE html>
@extends('layouts.app')

@section('non-connected')
    <a href=""><img src="{{ asset('assets/images/Avatar-icon.svg') }}" class="navbar-icons" alt=""></a>
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{ $trip->image }}" alt="{{ $trip->place }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $trip->place }}</h2>
            <p>{{ $trip->description }}</p>
        </div>
    </div>
</div>

@endsection

