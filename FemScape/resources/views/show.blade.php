@extends('layouts.app')

@section('connected')
    <a href="{{route('create')}}"><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

@section('content')
    <main>
        <img class="b-radius size" src="{{$trip->image}}" alt="..">
        <h1>{{$trip->place}}</h1>
        <h2>{{$trip->country}}</h2>
        <div class="icons d-flex">
            <a href="{{route('edit', $trip)}}"><img src="{{ asset('assets/images/Edit-icon.svg') }}" class="m-1" alt=""></a>
            <form action="{{route('destroy', $trip)}}" method="POST">
                @csrf
                @method('delete')
                <button class="delete-button" type="submit"><img src="{{ asset('assets/images/Delete-icon.svg') }}" class="m-1" alt=""></button>
            </form>
        </div>
        <p>{{$trip->description}}</p>
    </main>
@endsection