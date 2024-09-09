<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- import bootstrap  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Teams</title>
</head>
<body>

    <header>
        <div class="d-flex justify-content-evenly">
            <a href="http://127.0.0.1:8001/">Home</a>
            <a href="http://127.0.0.1:8000/colors">Colori</a>
            <a href="http://127.0.0.1:8000/teams">Team</a>
        </div>
    </header>

      {{-- stampo un array di oggetti utilizzando una condizione --}}

      <div class="container d-flex flex-column align-items-center">
        <h5>Stampo un array di oggetti</h5>

        @foreach ($teams as $team)

            <ul>
                <li>
                    @if($loop->first)
                        <span>questa è la prima iterazione</span>
                    @endif

                    @if($loop->last)
                        <span>questa è la l'ultima iterazione</span>
                    @endif

                    {{$team}}

                </li>
            </ul>

        @endforeach
    </div>

</body>
</html>
