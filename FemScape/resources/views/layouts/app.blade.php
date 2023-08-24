<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FemScape</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/formedit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toast.css') }}">




  </head>

  <body>
    <nav class="navbar navbar-light bg-white me-5 ms-5 border-bottom border-primary border-2">
        <div class="container-fluid">
          <a class="navbar-brand"><img src={{ asset('assets/images/Logo.svg') }} alt=""></a>
          <form class="d-flex" action="{{ route('search') }}" method="GET">
            <div class="input-wrapper">
            <input name="s" class="form-control me-2 rounded-pill" style="background-color:rgba(251, 253, 206, 1)" type="search" placeholder="Search" aria-label="Search">
            <a href=""><img src="{{ asset('assets/images/Glass-icon.svg') }}" class="input-icon" alt=""></a>
            </div>


            @auth
                <a href="{{route('indexUsers')}}"><img src="{{ asset('assets/images/Home-icon.svg') }}" class="navbar-icons" alt=""></a>

                <a href="{{route('create')}}"><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>

                <a href="{{route('logout')}}"><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons" alt=""></a>

                {{-- <form method="POST" action="{{ route('logout') }}">
                  @csrf --}}
                  {{-- <button type="submit"><img src="{{ asset('assets/images/Logout-icon.svg') }}" alt=""></button> --}}
            @endauth

            @guest
              <a href="{{route('index')}}"><img src="{{ asset('assets/images/Home-icon.svg') }}" class="navbar-icons" alt=""></a>
              <a href="{{route ('register') }}"><img src="{{ asset('assets/images/Avatar-icon.svg') }}" class="navbar-icons" alt=""></a>
            @endguest

        </form>
        </div>
      </nav>
      @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('javascript/selectubication.js') }}"></script>
    <script src="{{ asset('javascript/useralert.js') }}"></script>

  </body>
</html>