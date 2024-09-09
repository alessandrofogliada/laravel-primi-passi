<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colori</title>
</head>
<body>


    <header>
        <div class="d-flex justify-content-evenly">
            <a href="">Home</a>
            <a href="">Colori</a>
            <a href="">Team</a>
        </div>
    </header>

    {{-- stampo un array con un foreach  --}}
    <div class="flex justify-content-center">

        <span>Stampo un array utilizzando un Foreach</span>
        @foreach ($colors as $color)
        <ul>
            <li>
                {{$color}}
            </li>
        </ul>
        @endforeach
    </div>


{{-- stampo sempre un array ma ci aggiungo una condizione (if) --}}
    <div class="flex justify-content-center">

        <span>Stampo un array utilizzando un Foreach aggiungendoci una condizione</span>

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
