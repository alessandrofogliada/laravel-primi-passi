<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- import bootstrap  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Colori</title>
</head>
<body>


    <header>
        <div class="d-flex justify-content-evenly">
            <a href="http://127.0.0.1:8001/">Home</a>
            <a href="http://127.0.0.1:8000/colors">Colori</a>
            <a href="http://127.0.0.1:8000/teams">Team</a>
        </div>
    </header>

    {{-- stampo un array con un foreach  --}}
    <div class="d-flex flex-column align-items-center">

        <h5>Stampo un array utilizzando un Foreach</h5>
        @foreach ($colors as $color)
        <ul>
            <li>
                {{$color}}
            </li>
        </ul>
        @endforeach
    </div>


{{-- stampo sempre un array ma ci aggiungo una condizione (if) --}}
    <div class="d-flex flex-column align-items-center">

        <h5>Stampo un array utilizzando un Foreach aggiungendoci una condizione</h5>

        {{-- se la variabile $colors esiste , stampa la seguente condzione  --}}
        @if(isset($colors))

        @foreach ($colors as $color)
        <ul>
            <li>
                {{$color}}
            </li>
        </ul>
        @endforeach
        {{-- altrimenti stampa questa condzione  --}}
        @else
            <h4>
                non ci sono colori da stampare
            </h4>
        @endif
    </div>



</body>
</html>
