<x-base>

    <x-slot:tituloHead>Editar Persona</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita los detalles de la persona</x-slot:tituloVisible>

    <form action='{{ route('personas.update', $persona) }}' method='post'>
        @method('put')
        @csrf

        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' placeholder='Nombre' value='{{$persona->nombre}}'><br/>
        <label for='apellidos'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' placeholder='Apellidos' value='{{$persona->apellidos}}'><br/>
        <label for='telefono'>Teléfono</label>
        <input id='telefono' name='telefono' type='text' placeholder='Teléfono' value='{{$persona->telefono}}'><br/>
        <label for='estrella'>Estrella</label>
        <input id='estrella' name='estrella' type='text' placeholder='Estrella' value='{{$persona->estrella}}'><br/>
        <label for='categoria_id'>Categoría</label>
        <input id='categoria_id' name='categoria_id' type='text' placeholder='Categoría' value='{{$persona->categoria_id}}'><br/>

        <br><br>

        <button type='submit'>Actualizar</button>
    </form><br>

    <a href='{{ route('personas.index') }}'>Volver al listado</a>

</x-base>
