<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="m-5">
    <header></header>
    <main class="d-flex flex-wrap" >
        @foreach ($trips as $trip)
            <div class="card b-radius m-3">
                <img class="b-radius size" src="{{$trip->image}}" alt="">
                <div class="card-body">
                <h5 class="card-title">{{$trip->place}}</h5>
                <p class="card-text">{{$trip->country}}</p>
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>