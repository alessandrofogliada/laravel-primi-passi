<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- import bootstrap  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Primi passi con laravel</title>
</head>
<body>

    <header>
        <div class="d-flex justify-content-evenly">
            <a href="{{route('homepage')}}">Home</a>
            <a href="{{route('colors')}}">Colori</a>
            <a href="{{route('teams')}}">Team</a>
        </div>
    </header>

    <div class="container d-flex justify-content-center">

        {{-- stampo Helloworld utilizzando una variabile salvata in web.php  --}}
        <h1>Helloworld con {{$name_framework}}!!</h1>
    </div>
</body>
</html>
