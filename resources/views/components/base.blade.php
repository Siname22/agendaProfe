<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $tituloHead ?? 'Laragenda' }}</title>
</head>
<body>
    <h1>{{ $tituloVisible }}</h1>

    <hr/>

    {{ $slot }}

    <hr/>

    <p>En Getafe es <x-matasellos/>

    <p>En New York es <x-matasellos><x-slot:zonaHoraria>America/New_York</x-slot:zonaHoraria></x-matasellos></p>
</body>
</html>
