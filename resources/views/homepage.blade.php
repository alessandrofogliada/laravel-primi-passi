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

    <div class="container flex justify-content-center">

        {{-- stampo Helloworld utilizzando una variabile salvata in web.php  --}}
        <h1>Helloworld con {{$name_framework}}!!</h1>


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




    {{-- stampo un array con un foreach  --}}
    <div class="flex justify-content-center">

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
    <div class="flex justify-content-center">

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
