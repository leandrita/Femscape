@extends('layouts.app')

@section('connected')
    <a href="{{route('create')}}"><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

@section('content')
    <main>
        {{-- <img class="b-radius size" src="{{$trips->image}}" alt=".."> --}}
        <h1>{{$trips->place}}</h1>
        <h2>{{$trips->country}}</h2>
        <div class="icons d-flex">
            <a href="{{route('edit')}}"><img src="{{ asset('assets/images/Edit-icon.svg') }}" class="m-1" alt=""></a>
            <form action="{{route('destroy', $trips)}}" method="POST">
                @csrf
                @method('delete')
                <button class="delete-button" type="submit"><img src="{{ asset('assets/images/Delete-icon.svg') }}" class="m-1" alt=""></button>
            </form>
        </div>
        <p>{{$trips->description}}</p>
    </main>
@endsection