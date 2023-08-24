<!DOCTYPE html>
@extends('layouts.app')

@section('content')


<main class="d-flex justify-content-center m-main">
        <div class="d-flex justify-content-center align-items-center w-container">
            <img class="rounded-4 w-img" src="{{ $trip->image }}" alt="{{ $trip->place }}">
        </div>
        <div class="d-flex flex-column w-text">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="place">{{ $trip->place }}</h3>
                <div class="d-flex">
                        
                    @auth
                    <a href="{{route('edit', $trip)}}"><img src="{{ asset('assets/images/Edit-icon.svg') }}" class="m-1" alt=""></a>
                    <form action="{{route('destroy', $trip)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit"><img src="{{ asset('assets/images/Delete-icon.svg') }}" class="m-1" alt=""></button>
                    </form>
                    @endauth

                    @guest
                    
                    @endguest

                </div>
            </div>
            <p class="country">{{ $trip->country }}</p>
            <p class="description">{{ $trip->description }}</p>
        </div>
</main>
   


@endsection

