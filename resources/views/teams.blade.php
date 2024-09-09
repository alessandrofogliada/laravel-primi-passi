<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
</head>
<body>

    <header>
        <div class="d-flex justify-content-evenly">
            <a href="">Home</a>
            <a href="">Colori</a>
            <a href="">Team</a>
        </div>
    </header>

      {{-- stampo un array di oggetti utilizzando una condizione --}}

      <div class="container flex justify-content-center">
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
