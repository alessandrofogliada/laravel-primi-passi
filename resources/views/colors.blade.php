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

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Colori</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Team</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

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
