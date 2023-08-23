@extends('layouts.app')

@section('connected')
    <a href="{{route('create')}}"><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

@section('content')
    <main class="d-flex flex-wrap justify-content-center" >
        @foreach ($trips as $trip)
            <div class="card b-radius m-3">
                <img class="b-radius size" src="{{$trip->image}}" alt="">
                <div class="card-body d-flex justify-content-around align-items-center">
                    <div class="text">
                        <h5 class="card-title m-0">{{$trip->place}}</h5>
                        <p class="card-text">{{$trip->country}}</p>
                    </div>
                    <div class="icons d-flex">
                        <a href="{{route('edit')}}"><img src="{{ asset('assets/images/Edit-icon.svg') }}" class="m-1" alt=""></a>
                        <form action="{{route('destroy', $trip)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="delete-button" type="submit"><img src="{{ asset('assets/images/Delete-icon.svg') }}" class="m-1" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection