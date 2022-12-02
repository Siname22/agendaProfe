<x-base>

    <x-slot:tituloHead>Mostrar Persona</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles de la persona</x-slot:tituloVisible>

    <p>{{$persona->nombre}}</p>
    <p>{{$persona->apellidos}}</p>
    <p>{{$persona->telefono}}</p>
    <p>{{$persona->estrella}}</p>
    <p>{{$persona->categoria->nombre}}</p>

    <a href='{{ route('personas.edit', $persona) }}'>Editarla</a>

    <br/><br/>

    <a href='{{ route('personas.index') }}'>Volver al listado</a>

</x-base>
