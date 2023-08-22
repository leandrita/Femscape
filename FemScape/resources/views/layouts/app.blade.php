<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FemScape</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light bg-white me-5 ms-5 border-bottom border-primary border-2">
        <div class="container-fluid">
          <a class="navbar-brand"><img src={{ asset('assets/images/Logo.svg') }} alt=""></a>
          <form class="d-flex">
            <div class="input-wrapper">
            <input class="form-control me-2 rounded-pill" style="background-color:rgba(251, 253, 206, 1)" type="search" placeholder="Search" aria-label="Search">
            <a href=""><img src="{{ asset('assets/images/Glass-icon.svg') }}" class="input-icon" alt=""></a>
            </div>
            <a href=""><img src="{{ asset('assets/images/Home-icon.svg') }}" class="navbar-icons" alt=""></a>
            @yield('non-connected')
            @yield('connected')
        </form>
        </div>
      </nav>
      @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>