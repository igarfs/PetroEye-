<!DOCTYPE html>
<html>
<head>
    <title>Administrativo Home</title>
</head>
<body>
    <h1>Map Locations</h1>


    <h1>Conteúdo</h1>
    @if(isset($Location))
        @foreach ($items as $item)
            <p>
                Tipo de Poço: {{ $item->tp }},
                Localização: {{ $item->loc }},
                Início: {{ $item->ini }},
                Profundidade: {{ $item->prof }},
                Status: {{ $item->stat }},
                Operador: {{ $item->ope }},
                Campo: {{ $item->cam }},
                Bacia: {{ $item->bac }}
            </p>
        @endforeach
    @endif
</body>
</html>
