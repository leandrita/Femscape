@extends('layouts.app')

@section('content')    
    
@if(session('success'))
<div id="myAlert" class="alert-box alert-dismissible fade show text-center" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="close-btn" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

    <main class="d-flex flex-wrap justify-content-center" >        
        @foreach ($trips as $trip)
            <div class="card b-radius m-3">
                <a href="{{ route('show', $trip->id) }}">
                <img class="b-radius size" src="{{$trip->image}}" alt="">
                <div class="card-body d-flex justify-content-around align-items-center">
                    <div class="text">
                        <h5 class="card-title m-0">{{$trip->place}}</h5>
                        <p class="card-text">{{$trip->country}}</p>
                    </div>
                    <div class="icons d-flex">
                        <a href="{{route('edit', $trip)}}"><img src="{{ asset('assets/images/Edit-icon.svg') }}" class="m-1" alt=""></a>
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