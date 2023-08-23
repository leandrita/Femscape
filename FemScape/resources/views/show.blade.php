<!DOCTYPE html>
@extends('layouts.app')

@section('non-connected')
    <a href=""><img src="{{ asset('assets/images/Avatar-icon.svg') }}" class="navbar-icons" alt=""></a>
    <link rel="stylesheet" href="/FemScape/resources/css/app.css">
@endsection
@section('content')
<div class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center align-items-center" style="margin-right: -10rem;">
                <img class="rounded-4" src="{{ $trip->image }}" alt="{{ $trip->place }}" width="456" height="457">
            </div>
        </div>
        <div class="col-md-5 d-flex flex-column">
            <h3 style="color: #FF0060; font-weight: bold;">{{ $trip->place }}</h3>
            <p style="color: #FF0060;">{{ $trip->country }}</p>
            <p style="color: #0079FF; margin-top: 1rem;">{{ $trip->description }}</p>
        </div>
    </div>
</div>


@endsection

